<?php

namespace Admin\Model\Setting;

use Engine\Model;

class SettingRepository extends Model
{
	//const SECTION_GENERAL = 'general';

	public function getSettings($key)
	{

		$sql = $this->queryBuilder
				->select()
				->from('setting')
				->where('section',$key)
				->orderBy('id', 'ASC')
				->sql();

		return $this->db->query($sql, $this->queryBuilder->values);
	}

	public function getSettingValue($keyField)
	{
		$sql = $this->queryBuilder
				->select('value')
				->from('setting')
				->where('key_field', $keyField)
				->sql();

		$query = $this->db->query($sql, $this->queryBuilder->values);

		return isset($query[0]) ? $query[0]->value : null;
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

	public function updateActiveTheme($theme)
	{
		$sql = $this->queryBuilder
				->update('setting')
				->set(['value' => $theme])
				->where('key_field', 'active_theme')
				->sql();

		$this->db->execute($sql, $this->queryBuilder->values);
	}

}

?>