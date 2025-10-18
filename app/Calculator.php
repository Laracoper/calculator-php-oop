<?
namespace App;
class Calculator
{
    public $res;

    private function getPost()
    {
        return $_POST;
    }

    public function calc()
    {
          if ($this->getPost()['znak'] == '') {
            return $this->noZnak();
        }
        if ($this->getPost()['znak'] == '+') {
            return $this->plus();
        }
        if ($this->getPost()['znak'] == '-') {
            return $this->minus();
        }
        if ($this->getPost()['znak'] == '*') {
            return $this->multiply();
        }
        if ($this->getPost()['znak'] == '/') {
            if ($this->getPost()['b'] == '0') {
                return $this->divideOnZero();
            } else {
                return $this->divide();
            }
        }
    }

    private function noZnak(){
        return $this->res = 'выберите действие';
    }

    private function plus()
    {
        $result = $this->getPost()['a'] + $this->getPost()['b']; //или так
        return $result;
    }

    private function minus()
    {
        $this->res = $this->getPost()['a'] - $this->getPost()['b']; //или так
        return $this->res;
    }

    private function multiply()
    {
        $result = $this->getPost()['a'] * $this->getPost()['b'];
        return $result;
    }



    private function divideOnZero()
    {
        if ($this->getPost()['b'] == '0') {
            $this->res = 'делить на ноль нельзя';
            return $this->res;
        }
    }

    private function divide()
    {
        $this->res = $this->getPost()['a'] / $this->getPost()['b'];
        return $this->res;
    }
}