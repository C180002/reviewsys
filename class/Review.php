<?php
    class Review
    {
        private $id = '';
        private $restaurant_id = '';
        private $name = '';
        private $point = 0;
        private $sentence = '';

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getRestaurantId()
        {
            return $this->restaurant_id;
        }

        public function setRestaurantId($restaurant_id)
        {
            $this->restaurant_id = $restaurant_id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getPoint()
        {
            return $this->point;
        }

        public function setPoint($point)
        {
            $this->point = $point;
        }

        public function getSentence()
        {
            return $this->sentence;
        }

        public function setSentence($sentence)
        {
            $this->sentence = $sentence;
        }

        function __construct()
        {

        }

        // function __construct($id, $restaurant_id, $name, $point, $sentence)
        // {
        //     $this->id = $id;
        //     $this->restaurant_id = $restaurant_id;
        //     $this->name = $name;
        //     $this->point = $point;
        //     $this->sentence = $sentence;
        // }
    }
