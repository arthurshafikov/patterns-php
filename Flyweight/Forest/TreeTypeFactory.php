<?php

namespace Forest;

class TreeTypeFactory
{
    // just for text purposes public...
    public static array $treeTypes = [];

    public static function getBy(string $name, string $color, string $texture): TreeType
    {
        $treeType = self::checkExists($name, $color, $texture);
        if (is_null($treeType)) {
            $treeType = new TreeType($name, $color, $texture);
            self::$treeTypes[] = $treeType;
        }

        return $treeType;
    }

    private static function checkExists(string $name, string $color, string $texture): ?TreeType
    {
        foreach (self::$treeTypes as $treeType) {
            if (
                $treeType->getName() === $name &&
                $treeType->getColor() === $color &&
                $treeType->getTexture() === $texture
            ) {
                return $treeType;
            }
        }

        return null;
    }
}
