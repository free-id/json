<?php

declare(strict_types=1);

namespace FreeId\Json;

use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use FreeId\Core\Concerns\File;
use FreeId\Core\Contracts\File as FileContract;
use FreeId\Core\Parser as BaseParser;

class Parser extends BaseParser implements FileContract
{
    use File;

    public function __construct(
        string $path,
        string $parent_element,
        string $attribute = 'id',
        int $start_id = 1,
    ) {
        parent::__construct([], $start_id);
        $this->path = $path;
        $this->parent_element = $parent_element;
        $this->attribute = $attribute;
    }

    public function find(): int
    {
        $content = @file_get_contents($this->path);

        try {
            if ($content === false) {
                throw new FileNotFoundException();
            }
        } catch (FileNotFoundException $e) {
            die($e->getMessage());
        }

        foreach ((array) json_decode($content, true)[$this->parent_element] as $element) {
            if (array_key_exists($this->attribute, $element)) {
                $this->data[] = (int) $element[$this->attribute];
            }
        }

        return $this->enumerate();
    }
}
