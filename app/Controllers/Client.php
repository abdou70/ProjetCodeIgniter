<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ClientModel;
 
class Client extends Controller
{
 
    public function index()
    {    
        $model = new ClientModel();
 
        $data['listeclient'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('Client/clients', $data);
    }    
 
    public function create()
    {    
        return view('Client/create-client');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new ClientModel();
 
        $data = [
 
            'nom' => $this->request->getVar('nomclient'),
            'prenom'  => $this->request->getVar('prenomclient'),
            'adresseclient' => $this->request->getVar('adresseclient'),
            'emailclient' => $this->request->getVar('emailclient'),
            'telephoneclient' => $this->request->getVar('phoneclient'),
            'profession' => $this->request->getVar('professionclient'),
            'cni' => $this->request->getVar('numident'),
            'datenaissance' => $this->request->getVar('datenais'),
            'salaireclient' => $this->request->getVar('salaireclient'),
            'nomemployeur' => $this->request->getVar('moral'),
            'raisonsocial' => $this->request->getVar('raismoral'),
            'telephoneemploy' => $this->request->getVar('telemoral'),
            'adresseemploy' => $this->request->getVar('adresemoral'),
            'ninea' => $this->request->getVar('ninea'),
            'emailemploy' => $this->request->getVar('emailmoral'),
            ];
 
        $save = $model->insert($data);
 
        return view('Client/create-client') ;
    }
 
    public function edit($id = null)
    {
      
     $model = new ClientModel();
 
     $data['client'] = $model->where('id', $id)->first();
 
     return view('Client/edit-client', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new ClientModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'nom' => $this->request->getVar('nomclient'),
            'prenom'  => $this->request->getVar('prenomclient'),
            ];
 
        $save = $model->update($id,$data);
 
        return view('welcome_message');
    }
 
    public function delete($id = null)
    {
 
     $model = new ClientModel();
 
     $data['client'] = $model->where('id', $id)->delete();
      
     return view('Client/create-client');
    }
}