<?php

declare(strict_types=1);

enum PurePrefecture
{
    case AICHI;
    case SHIZUOKA;
    case MIE;
}

var_dump(PurePrefecture::AICHI);
//出力結果　enum(PureEnum::AICHI)

var_dump(PurePrefecture::AICHI->name);
//出力結果　string(5) "AICHI"
