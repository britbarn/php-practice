<?php

    //create task class
    class task
    {
        //create accessible variables
        public $description;
        public $completed = false;

        //method that gets called every time an object is instantiated
        public function __construct($description)
        {
            $this->description = $description;
        }

        //method to check the completion status
        public function isComplete()
        {
            return $this->completed;
        }

        //method to set the task as complete
        public function complete()
        {
            $this->completed = true;
        }
    }
