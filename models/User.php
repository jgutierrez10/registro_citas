<?php

namespace app\models;

use Yii;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
     public static function findIdentity($id)
      {
        $dbUser = self::find()->where(["usuario_id" => $id])->one();

        if(!count($dbUser)){
             return null;
        }

        return new static($dbUser);
      }

     /**
      * @inheritdoc
      */
     public static function findIdentityByAccessToken($token, $type = null)
     {
         foreach (self::$users as $user) {
             if ($user['accessToken'] === $token) {
                 return new static($user);
             }
         }

         return null;
     }

     /**
      * Finds user by username
      *
      * @param  string      $username
      * @return static|null
      */
     public static function findByUsername($username)
     {
         $dbUser = self::find()
                 ->where([
                     "lower(nombre_usuario)" => $username,
                     "activo" => 1,
                 ])
                 ->one();

         if (!count($dbUser)) {
             return null;
         }

         return new static($dbUser);
     }

     /**
      * @inheritdoc
      */
     public function getId()
     {
         return $this->usuario_id;
     }

     /**
      * @inheritdoc
      */
     public function getAuthKey()
     {
         return $this->authKey;
     }

     /**
      * @inheritdoc
      */
     public function validateAuthKey($authKey)
     {
         return $this->authKey === $authKey;
     }

     public function getUsername(){

         if($this->username === null && $this->nombre_usuario != null){

             $this->username = $this->nombre_usuario;
         }

         return $this->username;
     }

     /**
      * Validates password
      *
      * @param  string  $password password to validate
      * @return boolean if password provided is valid for current user
      */
     public function validatePassword($password)
     {
         return $this->clave_usuario === $password;
     }

     public function getUsers(){

         $dbUser = self::find();

         if(!count($dbUser)){
             return null;
         }

        return new static($dbUser);
     }
}
