<?php

class ApartmentController extends BaseController
{
    public $name = 'apartment';

    protected $apartmentRepository;

    public function __construct($apartmentRepository)
    {
        $this->apartmentRepository = $apartmentRepository;
    }

    public function apartmentAction(Request $request)
    {
        $apartments = $this->apartmentRepository->getAllApartments();
        return new Response($this->render('/ApartmentTmp/apartments', [
            'Apartments' => $apartments
        ]));
    }

    public function createFormAction()
    {
        return new Response($this-> render('/ApartmentTmp/creation_apartment'));
    }

    public function createAction($request)
    {
        if ($request->isPost() && !empty($request->getRequestParameter('apartment'))) {

            $apartment = $request->getRequestParameter('apartment');
            $apartmentValidator = new ApartmentValidator();
            $errors = $apartmentValidator->validate($apartment);

            if(empty($errors)){
                $this->apartmentRepository->add($request->getRequestParameter('apartment'));

                return new Response(
                    '/apartment_Contracts', '301', 'Moved'
                );
            } else {
                return new Response(
                    $this->render('ApartmentTmp/creation_apartment', ['errors' => $errors])
                );
            }
        }
    }
}