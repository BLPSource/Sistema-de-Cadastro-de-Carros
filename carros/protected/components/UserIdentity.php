<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 *

	public function authenticate()
	{
		$users=array(
			// username => password
			'emo'=>'emo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
     */

    public function authenticate()
    {
        $record=Usuario::model()->findByAttributes(array('nome'=>$this->username));
        if($record===null)
        {
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }
        else if($record->senha!=$this->password)
        {
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }
        else
        {
            Yii::app()->session['userId'] = $record->id_usuario;
            Yii::app()->session['username'] = $record->nome;
            Yii::app()->session['isAdmin'] = ($record->perfil==1);
            $log=new Logs;
            $log->fk_usuario_logs=$record->id_usuario;
            $log->save();
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }


}