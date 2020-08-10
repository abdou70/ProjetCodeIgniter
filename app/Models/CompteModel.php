<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CompteModel extends Model
{
    protected $table = 'Compte';
 
    protected $allowedFields = ['numagence', 'numcompte', 'clerib', 'dateOuverture', 'MontantInitial', 'fraisouverture', 'agios', 'datebloquage','datedebloquage'];
}