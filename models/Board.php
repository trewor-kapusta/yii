<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\base\Model;
use yii\db\Query;

class Board extends ActiveRecord
{
	public static function tableName()
    {
        return 'q_board_entries';
    }

    function putMessage($userId, $msg)
    {
    	$this->id_user = $userId;
    	$this->entry = $msg;
    	$this->save();
    }

	function getMessages($lastId)
	{
		if (!isset($lastId))
			$lastId = 0;

		$query = new Query();
		$query->select('e.id_board_entry, e.entry, u.username')
			  ->from('q_board_entries e')
			  ->leftJoin('q_user u', 'u.id = e.id_user')
			  ->where('e.id_board_entry > :lastId', [':lastId' => $lastId]);
		$cmd = $query->createCommand();
		return $cmd->queryAll();
	}
}

?>