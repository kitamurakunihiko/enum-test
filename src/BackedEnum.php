<?php

declare(strict_types=1);

enum BackedPrefecture: string
{
    case AICHI = "愛知県";
    case SHIZUOKA = "静岡県";
    case MIE = "三重県";
}

var_dump(BackedPrefecture::AICHI);
//出力結果　enum(PureEnum::AICHI)

var_dump(BackedPrefecture::AICHI->name);
//出力結果　string(5) "AICHI"

var_dump(BackedPrefecture::AICHI->value);
//出力結果　string(9) "愛知県"
