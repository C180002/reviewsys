<?php
    class Restaurant
    {
        private $id = '';
        private $name = '';
        private $area_id = '';
        private $summary = '';

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getAreaId()
        {
            return $this->area_id;
        }

        public function setAreaId($area_id)
        {
            $this->area_id = $area_id;
        }

        public function getSummary()
        {
            return $this->summary;
        }

        public function setSummary($summary)
        {
            $this->summary = $summary;
        }

        function __construct()
        {

        }

        // function __construct($id, $name, $area_id, $summary)
        // {
        //     $this->id = $id;
        //     $this->name = $name;
        //     $this->area_id = $area_id;
        //     $this->summary = $summary;
        // }
    }
?>