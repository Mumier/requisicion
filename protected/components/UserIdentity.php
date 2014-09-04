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
	 */
	public function authenticate()
	{
		$user=ShopCustomer::model()->findByAttributes(array(
				'username' => $this->username));


		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else
			if($user->check($this->password))
		{
		
            $this->setState('customer_id', $user->customer_id);
            $this->errorCode=self::ERROR_NONE;
		}
		else
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		return !$this->errorCode;
	}


}

/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}*/