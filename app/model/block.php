<?php

class Modelblock extends model
{

	public function lists()
	{
		return $this->db->select('block','*');
	}
}