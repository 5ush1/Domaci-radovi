<?php 

class product{

	const VALID_TYPES = [self::TYPE_TABLE, self::TYPE_CHAIR];
	const TYPE_TABLE = "table";
	const TYPE_CHAIR = "chair";

	private float $price;
	private string $name;
	private string $type;
    private float $discount;

	public function __construct(string $name, float $price, string $type, float $discount = 0)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setType($type);
        $this->setDiscount($discount);
        $price = $this->getPrice($price)-$this->getPrice($price)*($this->getDiscount($discount)/100);
        echo $this->getName(). ", " . $price . ", " . $this->getType();

    }

    /**
     * @param string $type
     * @return bool
     */
	public static function isValidType(string $type): bool
    {
        return in_array($type, self::VALID_TYPES);
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        if(!self::isValidType($type)){
            die("Invalid type. Valid types ".implode(" ,", self::VALID_TYPES));
        }
        $this->type = $type;
    }
    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

}