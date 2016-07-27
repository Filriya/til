<?php

include_once "_mod.php";

#
#In the card game poker, a hand consists of five cards and are ranked, from lowest to highest, in the following way:
#
#High Card: Highest value card.
#1,One Pair: Two cards of the same value.
#2,Two Pairs: Two different pairs.
#3,Three of a Kind: Three cards of the same value.
#4,Straight: All cards are consecutive values.
#5,Flush: All cards of the same suit.
#6,Full House: Three of a kind and a pair.
#7,Four of a Kind: Four cards of the same value.
#8,Straight Flush: All cards are consecutive values of same suit.
#9,Royal Flush: Ten, Jack, Queen, King, Ace, in same suit.
#10,The cards are valued in the order:
#2, 3, 4, 5, 6, 7, 8, 9, 10, Jack, Queen, King, Ace.
#
#If two players have the same ranked hands then the rank made up of the highest value wins; for example, a pair of eights beats a pair of fives (see example 1 below). But if two ranks tie, for example, both players have a pair of queens, then highest cards in each hand are compared (see example 4 below); if the highest cards tie then the next highest cards are compared, and so on.
#
#Consider the following five hands dealt to two players:
#
#Hand     Player 1     Player 2     Winner
#1     5H 5C 6S 7S KD   2C 3S 8S 8D TD  Player 2
#2     5D 8C 9S JS AC   2C 5C 7D 8S QH  Player 1
#3     2D 9C AS AH AC   3D 6D 7D TD QD  Player 2
#4     4D 6S 9H QH QC   3D 6D 7H QD QS  Player 1
#5     2H 2D 4C 4D 4S   3C 3D 3S 9S 9D  Player 1
#The file, poker.txt, contains one-thousand random hands dealt to two players. Each line of the file contains ten cards (separated by a single space): the first five are Player 1's cards and the last five are Player 2's cards. You can assume that all hands are valid (no invalid characters or repeated cards), each player's hand is in no specific order, and in each hand there is a clear winner.
#
#How many hands does Player 1 win?

include_once "0054_poker.php";

$values = [
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    "T" => 10,
    "J" => 11,
    "Q" => 12,
    "K" => 13,
    "A" => 14,
];

main($src);

function main($src) {
    $result = 0;
    foreach ($src as $val) {
        $player1 = $val[0];
        $player2 = $val[1];
        if(checkResult($player1, $player2)) {
            $result++;
    
        }
    }
    e($result);
}

function checkResult($hand1, $hand2) {
    return getRank($hand1) > getRank($hand2);
}
$testHand = ['2H', '2D', '4C', '4D', '4S'];

function getRank($hand) {
    if(isRoyalFlush($hand)) {
        $rank = "10".isRoyalFlush($hand); 
    } else if(isStraightFlush($hand)) {
        $rank = "9".isStraightFlush($hand); 
    } else if(isFourcard($hand)) {
        $rank = "8".isFourcard($hand); 
    } else if(isFullHouse($hand)) {
        $rank = "7".isFullHouse($hand); 
    } else if(isFlush($hand)) {
        $rank = "6".isFlush($hand); 
    } else if(isStraight($hand)) {
        $rank = "5".isStraight($hand); 
    } else if(isThreeCards($hand)) {
        $rank = "4".isThreeCards($hand); 
    } else if(isTwoPair($hand)) {
        $rank = "3".isTwoPair($hand); 
    } else if(isOnePair($hand)) {
        $rank = "2".isOnePair($hand); 
    } else {
        $rank = "1";
    }

    $arr = array_map(function($n) {
        global $values;
        return $values[substr($n, 0, 1)];
    }, $hand);
    rsort($arr);
    $result = $rank.array_reduce($arr, function($carry, $item) {
        $item = zeloFill($item);
        return $carry.','.$item;
    }, "");

    e($result);
    return $result;
}

function zeloFill($item) {
    if(strlen(strval($item)) == 1) {
        $item = "0".$item; 
    }
    return $item;
}

function getHighest($hand) {
    $arr = array_map(function($n) {
        return substr($n, 0, 1);
    }, $hand);

    return array_reduce($arr, function($result, $i){
        global $values;
        if  ($values[$i] > $result) {
            return $values[ $i ];
        } else {
            return $result; 
        }
    }, 0);
}

function isFullHouse($hand) {
    if(isOnePair($hand) && isThreeCards($hand)) {
        return zeloFill(isThreeCards($hand));
    } else {
        return false;
    }
}

function isOnePair($hand) {
    $arr = array_map(function($n) {
        return substr($n, 0, 1);
    }, $hand);

    $arr = array_count_values($arr);

    foreach ($arr as $key => $value) {
        if($value == 2) {
            global $values;
            return zeloFill($values[$key]);
        }
    }
    return false;
}

function isTwoPair($hand) {
    $arr = array_map(function($n) {
        return substr($n, 0, 1);
    }, $hand);

    $arr = array_count_values($arr);
    $pairCount = 0;
    $highCard = 0;

    foreach ($arr as $key => $value) {
        if($value == 2) {
            global $values;
            if(intval($highCard) < intval($values[$key])) {
                $highCard = $values[$key];
            }
            $pairCount++;
            if($pairCount >= 2) {
                return zeloFill($highCard);
            }
        }
    }
    return false;
}

function isThreeCards($hand) {
    $arr = array_map(function($n) {
        return substr($n, 0, 1);
    }, $hand);

    $arr = array_count_values($arr);

    foreach ($arr as $key => $value) {
        if($value == 3) {
            global $values;
            return zeloFill($values[$key]);
        }
    }
    return false;
}

function isFourcard($hand) {
    $arr = array_map(function($n) {
        return substr($n, 0, 1);
    }, $hand);

    $arr = array_count_values($arr);

    if(count($arr) == 2) {
        foreach ($arr as $key => $value) {
            if($value == 4) {
                global $values;
                return zeloFill($values[$key]);
            }
        }
        return false;
    } else {
        return false;
    }
}

function isFlush($hand) {
    $arr = array_map(function($n) {
        return substr($n, 1, 1);
    }, $hand);
    if((count(array_unique($arr))) == 1) {
        return zeloFill(getHighest($hand));
    } else {
        return false;
    }
}

function isStraight($hand) {
    $arr = array_map(function($n) {
        global $values;
        return $values[substr($n, 0, 1)];
    }, $hand);
    sort($arr);

    if (count(array_unique($arr)) == 5 && $arr[4] - $arr[0] == 4) {
        return zeloFill(getHighest($hand));
    } else {
        return false;
    }
}

function isStraightFlush($hand) {
    if( isStraight($hand) && isFlush($hand)) {
        return zeloFill(getHighest($hand));
    } else {
        return false;
    }
}

function isRoyalFlush($hand) {
    if (getHighest($hand) == 14 && isStraightFlush($hand)) {
        return "14";
    } else {
        return false;
    }
}
