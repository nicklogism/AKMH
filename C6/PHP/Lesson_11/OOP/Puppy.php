<?php

class Puppy extends Dog {

    public function bark() {
        $str = $this->name. " says miaou";
        return $str;
    }

}
?>