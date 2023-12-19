<?php

/** 
 * Equipo 3 :  Marco Antonio Romero Rodríguez - David Benjamin Trejo Salazar
 * 
 *  El proyecto cuenta con tres archivos PHP, un archivo CSS y dos imágenes.
 * El primer archivo PHP seria index.html, ya que por su nombre es el archivo principal. 
 * casi toda la funcionalidad se encuentra en este archivo, ya que contiene un formulario 
 * que tiene como acción el mismo documento para que se haga la validación de los datos, 
 * además de recuperar datos ingresados, así como mostrar los mensajes de error que existan, 
 * esto se logra utilizando un objeto myreg de la clase Register que se encuentra en otro 
 * archivo PHP, en el se generar todas las variables utilizadas para el manejo de error y 
 * mensajes, así como las validaciones. Las validaciones que se hicieron fueron, campo vacío, 
 * formato de correo, formato de RFC, Formato de CP, Formato de Telefono. Por ultimo si 
 * todo el formulario se encuentra correctamente llenado se guarda momentáneamente los datos 
 * en variables de sesión y se hace una redirección de pagina en la cual se cargan los datos 
 * y se borras las variables de sesión. 
 * 
*/
  
  
 


class Register{
  protected   $name ;
  protected   $name_error ;
  protected   $msj_name_error ;

  protected   $lastname ;
  protected   $lastname_error ;
  protected   $msj_lastname_error ;

  protected   $email;
  protected   $email_error; 
  protected   $msj_email_error; 

  protected   $pass  ;
  protected   $pass_error; 
  protected   $msj_pass_error;

  protected   $repass   ;
  protected   $repass_error; 

  protected   $phone ;
  protected   $phone_error; 
  protected   $msj_phone_error; 
  
  protected   $rfc ;
  protected   $rfc_error ;
  protected   $msj_rfc_error ; 
  
  protected   $address ;
  protected   $address_error ;
  protected   $msj_address_error ;
  
  protected   $cp ;
  protected   $cp_error; 
  protected   $msj_cp_error; 
  
  protected   $city ;
  protected   $city_error ;
  protected   $msj_city_error; 
  
  protected   $area ;
  protected   $area_error ;
  protected   $msj_area_error;

  protected   $bdate ;
  protected   $bdate_error ;
  protected   $msj_bdate_error;
  
  
  function __construct(){

  }
  /**
   * Get the value of name
   */ 
  public function getName(){
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name){
    $this->name = $name;
    $this->name_error = 0;
    $this->msj_name_error ="";
    return $this;
  }

  /**
   * Get the value of lastname
   */ 
  public function getLastname(){
    return $this->lastname;
  }

  /**
   * Set the value of lastname
   *
   * @return  self
   */ 
  public function setLastname($lastname){
    $this->lastname = $lastname;
    $this->lastname_error = 0;
    $this->msj_lastname_error = "";
    return $this;
  }

  /**
   * Get the value of email
   */ 
  public function getEmail(){
    return $this->email;

  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail($email){
    $this->email = $email;
    $this->email_error = 0;
    $this->msj_email_error = "";
    return $this;
  }

  /**
   * Get the value of pass
   */ 
  public function getPass(){
    return $this->pass;
  }

  /**
   * Set the value of pass
   *
   * @return  self
   */ 
  public function setPass($pass){
    $this->pass = $pass;
    $this->pass_error = 0;
    $this->msj_pass_error = "";
    return $this;
  }

  /**
   * Get the value of phone
   */ 
  public function getPhone(){
    return $this->phone;
  }

  /**
   * Set the value of phone
   *
   * @return  self
   */ 
  public function setPhone($phone){
    $this->phone = $phone;
    $this->phone_error = 0;
    $this->msj_phone_error = "";
    return $this;
  }

  /**
   * Get the value of rfc
   */ 
  public function getRfc(){
    return $this->rfc;
  }

  /**
   * Set the value of rfc
   *
   * @return  self
   */ 
  public function setRfc($rfc){
    $this->rfc = $rfc;
    $this->rfc_error = 0;
    $this->msj_rfc_error = "";
    return $this;
  }

  /**
   * Get the value of address
   */ 
  public function getAddress(){
    return $this->address;
  }

  /**
   * Set the value of address
   *
   * @return  self
   */ 
  public function setAddress($address){
    $this->address = $address;
    $this->address_error = 0;
    $this->msj_address_error = "";
    return $this;
  }

  /**
   * Get the value of cp
   */ 
  public function getCp(){
    return $this->cp;
  }

  /**
   * Set the value of cp
   *
   * @return  self
   */ 
  public function setCp($cp){
    $this->cp = $cp;
    $this->cp_error = 0;
    $this->msj_cp_error = "";
    return $this;
  }

  /**
   * Get the value of city
   */ 
  public function getCity(){
    return $this->city;
  }

  /**
   * Set the value of city
   *
   * @return  self
   */ 
  public function setCity($city){
    $this->city = $city;
    $this->city_error = 0;
    $this->msj_city_error = "";
    return $this;
  }

  /**
   * Get the value of area
   */ 
  public function getArea(){
    return $this->area;
  }

  /**
   * Set the value of area
   *
   * @return  self
   */ 
  public function setArea($area){
    $this->area = $area;
    $this->area_error = 0;
    $this->msj_area_error = "";
    return $this;
  }

  /**
   * Get the value of bdate
   */ 
  public function getBdate(){
    return $this->bdate;
  }

  /**
   * Set the value of bdate
   *
   * @return  self
   */ 
  public function setBdate($bdate){
    $this->bdate = $bdate;
    $this->bdate_error = 0;
    $this->msj_bdate_error = "";
    return $this;
  }

  function errorEmpty($data){
    $error = $data."_error";
    $msj = 'msj_'.$data.'_error';
    if(strlen($this->$data) == 0){
      $this->$error += 1;
      $this->$msj = $this->$msj."Campo vacio <br>";
      return 1;
    }
    return 0;
  }

  function errorEmail($data){
    $str = $this->$data;
    $error = $data."_error";
    $msj = 'msj_'.$data.'_error';
    $matches = null;
    if (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $str, $matches))
      return 0;
      $this->$error += 2;
      $this->$msj = $this->$msj."No es correo valido <br>";
    return 2;
  }

  function errorRFC($data){
    $str = $this->$data;
    $error = $data."_error";
    $msj = 'msj_'.$data.'_error';
    $matches = null;
    if (1 === preg_match('/^[A-zÑñ&]{3,4}\d{6}(?:[A-z\d]{3})?$/', $str, $matches))
      return 0;
      $this->$error += 4;
      $this->$msj = $this->$msj."No es RFC valido <br>";
    return 2;
  }

  function errorCP($data){
    $str = $this->$data;
    $error = $data."_error";
    $msj = 'msj_'.$data.'_error';
    $matches = null;
    if (1 === preg_match('/^[\d]{5}?$/', $str, $matches))
      return 0;
      $this->$error += 8;
      $this->$msj = $this->$msj."No es un Codigo Postal valido <br>";
    return 2;
  }

  function errorPhone($data){
    $str = $this->$data;
    $error = $data."_error";
    $msj = 'msj_'.$data.'_error';
    $matches = null;
    if (1 === preg_match('/^[\d]{6,12}?$/', $str, $matches))
      return 0;
      $this->$error += 16;
      $this->$msj = $this->$msj."No es telefono valido <br>";
    return 2;
  }

  function errorMin($data,$min){
    $str = $this->$data;
    $error = $data."_error";
    $msj = 'msj_'.$data.'_error';
    $matches = null;
    if (1 === preg_match('/^[\d]{'.$min.',128}?$/', $str, $matches))
      return 0;
    return 2;
  }

  function errorPassword($data){
    $str = $this->$data;
    $error = $data."_error";
    $msj = 'msj_'.$data.'_error';
    $matches = null;
    if (1 === preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)([A-Za-z\d]|[^ ]){6,32}$/', $str, $matches))
      return 0;
      $this->$error += 32;
      $this->$msj = $this->$msj."No es una contraseña valida<br>";
    return 2;
  }

  function errorSamePassword($data, $str2){
    $str = $this->$data;
    $error = $data."_error";
    $msj = 'msj_'.$data.'_error';
    $matches = null;
    echo ($str.' '.$str2);
    if (0 == strcmp( $str,$str2))
      return 0;
      $this->$error += 64;
      $this->$msj = $this->$msj."Contraseñas no son Iguales<br>";
    return 2;
  }
  /**
   * Get the value of name_error
   */ 
  public function getCodeError($data){
    $varname = $data.'_error';
    return $this->$varname;
  }

  public function getMsjError($data){
    $varname = 'msj_'.$data.'_error';
    return $this->$varname;
  }
}

?>