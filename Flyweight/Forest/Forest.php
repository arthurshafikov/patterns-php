<?php

namespace Forest;

class Forest
{
    protected array $trees = [];

    public function plantTree(int $x, int $y, string $name, string $color, string $texture): Tree
    {
        $treeType = TreeTypeFactory::getBy($name, $color, $texture);

        $tree = new Tree($x, $y, $treeType);
        $this->trees[] = $tree;

        return $tree;
    }

    public function draw(): void
    {
        foreach ($this->trees as $tree) {
            echo sprintf(
                "Tree %s:\nColor:%s\nTexture:%s\nCoordinates: %s, %s\n\n",
                $tree->getName(),
                $tree->getColor(),
                $tree->getTexture(),
                $tree->getX(),
                $tree->getY(),
            );
        }
    }
}
