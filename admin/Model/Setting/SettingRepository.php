<?php

namespace Admin\Model\Setting;

use Engine\Model;

class SettingRepository extends Model
{
	public function getSettings()
	{
		$sql = $this->queryBuilder
				->select()
				->from('setting')
				->orderBy('id', 'ASC')
				->sql();

		return $this->db->query($sql);
	}

	public function updateSetting($params)
	{
		if(!empty($params)){
			foreach ($params as $key => $value) {
				$sql = $this->queryBuilder
				->update('setting')
				->set(['value' => $value])
				->where('key_field', $key)
				->sql();

			$this->db->execute($sql, $this->queryBuilder->values);
			}
		}
	}

}

?>