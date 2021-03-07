<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct;


use Imper86\PhpBaselinkerApi\Enum\ImageType;

class Image
{
    private ImageType $type;
    private string $value;

    public function __construct(ImageType $type, string $value)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public function __toString(): string
    {
        return sprintf('%s:%s', $this->type->getValue(), $this->value);
    }

    public static function fromUrl(string $url): self
    {
        return new self(ImageType::URL(), $url);
    }

    public static function fromData(string $base64EncodedImage): self
    {
        return new self(ImageType::DATA(), $base64EncodedImage);
    }
}
