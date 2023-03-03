<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class QuestionTypeEnum extends Enum
{
    const TRUE_OR_FALSE = "trueOrFalse";
    const MCQ = "MCQ";
    const OptionThree = 2;
}
