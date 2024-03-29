<?php

/**
 * BaseCliente
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $rut
 * @property string $razon_social
 * @property string $giro
 * @property string $nombre_representante
 * @property string $direccion
 * @property integer $telefono_contacto
 * 
 * @method integer getId()                   Returns the current record's "id" value
 * @method string  getRut()                  Returns the current record's "rut" value
 * @method string  getRazonSocial()          Returns the current record's "razon_social" value
 * @method string  getGiro()                 Returns the current record's "giro" value
 * @method string  getNombreRepresentante()  Returns the current record's "nombre_representante" value
 * @method string  getDireccion()            Returns the current record's "direccion" value
 * @method integer getTelefonoContacto()     Returns the current record's "telefono_contacto" value
 * @method Cliente setId()                   Sets the current record's "id" value
 * @method Cliente setRut()                  Sets the current record's "rut" value
 * @method Cliente setRazonSocial()          Sets the current record's "razon_social" value
 * @method Cliente setGiro()                 Sets the current record's "giro" value
 * @method Cliente setNombreRepresentante()  Sets the current record's "nombre_representante" value
 * @method Cliente setDireccion()            Sets the current record's "direccion" value
 * @method Cliente setTelefonoContacto()     Sets the current record's "telefono_contacto" value
 * 
 * @package    tesis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCliente extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cliente');
        $this->hasColumn('id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 10,
             ));
        $this->hasColumn('rut', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('razon_social', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('giro', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('nombre_representante', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('direccion', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('telefono_contacto', 'integer', 45, array(
             'type' => 'integer',
             'length' => 45,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}