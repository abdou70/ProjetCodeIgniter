<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientModel extends Model
{
    protected $table = 'Client';
 
    protected $allowedFields = ['nom', 'prenom', 'adresseclient', 'emailclient', 'telephoneclient', 'profession', 'cni', 'datenaissance','salaireclient', 'nomemployeur', 'raisonsocial', 'telephoneemploy', 'adresseemploy', 'ninea', 'emailemploy'];
}