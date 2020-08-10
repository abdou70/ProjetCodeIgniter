<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\CompteModel;
 
class Compte extends Controller
{
 
    public function index()
    {    
        $model = new CompteModel();
 
        $data['listecompte'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('Compte/compte', $data);
    }    
 
    public function create()
    {    
        return view('Compte/create-compte');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new CompteModel();
 
        $data = [
 
            'numagence' => $this->request->getVar('numagence'),
            'numcompte'  => $this->request->getVar('numcompte'),
            'clerib' => $this->request->getVar('rib'),
            'dateOuverture' => $this->request->getVar('date'),
            'MontantInitial' => $this->request->getVar('montant'),
            'fraisouverture' => $this->request->getVar('frais'),
            'agios' => $this->request->getVar('agios'),
            'datebloquage' => $this->request->getVar('date1'),
            'datedebloquage' => $this->request->getVar('date2')
            
            ];
 
        $save = $model->insert($data);
 
        return view('Compte/compte') ;
    }
 
    public function edit($id = null)
    {
      
     $model = new CompteModel();
 
     $data['compte'] = $model->where('id', $id)->first();
 
     return view('Compte/edit-compte', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new CompteModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'numagence' => $this->request->getVar('numagence'),
            'numcompte'  => $this->request->getVar('numcompte'),
            ];
 
        $save = $model->update($id,$data);
 
        return view('welcome_message');
    }
 
    public function delete($id = null)
    {
 
     $model = new CompteModel();
 
     $data['client'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/clients') );
    }
}