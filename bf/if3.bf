# a b b_tmp b_is_zero
+++++ # {1} = 5
>+++< # {2} = 3
[
  ->-<  # a bをひとつずつ減らす

  #if b = 0
  >[->+>+<<]>>[-<<+>>]< # p = b_tmp
  >+< # b_is_zero flag
  [[-]>-<]>[
    -
    # aが大きい場合の処理
    <<<[-]>>>
  ]
  <<<
]
>>+<
[
  [-]>-<
  # bが大きい場合の処理
]
>[-
  # a = bの場合の処理
]
