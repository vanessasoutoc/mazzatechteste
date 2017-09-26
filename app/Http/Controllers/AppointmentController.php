<?php

namespace App\Http\Controllers;

use App\DataTables\AppointmentDataTable;
use Illuminate\Http\Request;
use App\Appointment;
use App\Http\Requests\CreateAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Repositories\AppointmentRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Log;

class AppointmentController extends Controller
{

 	private $appointmentRepository;

    public function __construct(AppointmentRepository $appointmentRepo)
    {
        $this->middleware('auth');
         $this->appointmentRepository = $appointmentRepo;
    }

    public function index(AppointmentDataTable $appointmentDataTable){
  		return $appointmentDataTable->render('appointments.index');
    }

    public function create(){
    	return view('appointments.create');
    }

      public function edit($id){
         //$appointment = $this->appointmentRepository->findWithoutFail($id);
        $appointment = Appointment::find($id)->with('doctor')->with('patient')->get();
        $appointment = $appointment[0];
        Log::info($appointment);
        
        if (empty($appointment)) {
             Flash::error('Agendamento não existe.');

             return redirect(route('appointments.index'));
         }

         return view('appointments.edit')->with('appointment', $appointment);
    }

    public function update($id, UpdateAppointmentRequest $request)
    {
        $appointment = $this->appointmentRepository->findWithoutFail($id);


        if (empty($appointment)) {
            Flash::error('Agendamento não existe');

            return redirect(route('doctors.index'));
        }
   
         //$request['appointment_date'] = \Carbon\Carbon::createFromFormat('d/m/Y H:i',$request['appointment_date']);


        $appointment = $this->appointmentRepository->update($request->all(), $id);

        Flash::success('Agendamento alterado com sucesso.');

        return redirect(route('appointments.index'));
    }

    public function show($id)
    {
        $appointment = $this->appointmentRepository->findWithoutFail($id);

        if (empty($appointment)) {
            Flash::error('Agendamento não existe.');

            return redirect(route('appointments.index'));
        }

        return view('appointments.show')->with('appointment', $appointment);
    }

    public function store(CreateAppointmentRequest $request){
    	$input = $request->all();

  	
         $input['appointment_date'] = \Carbon\Carbon::createFromFormat('d/m/Y H:i',$input['appointment_date']);
         

 		 $appointment = $this->appointmentRepository->create($input);

         Flash::success('Agendamento salvo com sucesso.');

        return redirect(route('appointments.index'));

    }

    public function destroy($id)
    {
        $appointment = $this->appointmentRepository->findWithoutFail($id);

        if (empty($appointment)) {
            Flash::error('Agendamento não existe.');

            return redirect(route('appointments.index'));
        }

        $this->appointmentRepository->delete($id);

        Flash::success('Agendamento excluído com sucesso.');

        return redirect(route('appointments.index'));
    }
}
