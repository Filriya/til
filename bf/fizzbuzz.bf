http://moon.kmc.gr.jp/~prime/brainf_ck/env/
F i z B u LF 3cnt 5cnt tmp1 tmp2 src pflg blank blank 
>+++++++[-<++++++++++>]< 70 = F
>>+++++++[-<+++++++++++++++>]< 105 = i
>>++++++++++[-<++++++++++++>]<++ 122 = z
>>++++++[-<+++++++++++>]< 66 = B
>>++++++++++[-<+++++++++++>]<+++++++ 117 = u
>++++++++++ 10 LF

>+++>+++++>> 3cnt = 3 5cnt = 5
>,
{3:4} = 0 1なら処理して繰り上がり
{3:4} = 1 0なら繰り下がり
{3:4} = 0 0なら終了
[-
  <<<<->->>> cntたちをへらす
  >+< pflg

  ここから表示用の加算
  >>>>>>>+ p {4}
  [-
    <[-] 繰り下がりフラグを消去
    <<
    [->>+<<]>>>+<[[-<<+>>]>-<]>[- // {1}が0なら
      <++++++[-<<++++++++>>]<< // {1} s0
      >+++++++++ //{2} 9
      >>
    ]<<< p = {1}
    >[->+<]>>+<[[-<+>]
      //{2}が1以上なら
      <-<+>>
      >-<
    ]>[-
      //{2}が0なら
      <+++++++++[-<+<->>]>
      >>>>+<<<< //繰り上がり
    ] p = {4}
    <+>>>>+ 今いる桁と一つ上の桁の繰り上がりフラグを立てる
    > 次の桁へ
  ]<
  [[-]<<<<] //{3}が0でなければ位を下げる
  << p 1

  <<<< p cnt3
  [->>+<<]>>>+<[[-<<+>>]>-<]>[-
    // 3の倍数のときの処理
    >>[-]<< pflg off
    <<<+++ cntもどす
    <<<<<<.>.>..>>>>
    >>>
  ]
  << p cnt5
  [->+<]>>+<[[-<+>]>-<]>[-
    // 5の倍数のときの処理
    >>[-]<< pflg off
    <<+++++ cntもどす
    <<<<.>.<<..>>>>>
    >>
  ]p tmp2

  >>
  [[-] pflg
    >>>>>>+
    [- p:4
      <[-] p:3 繰り下がりフラグを消去
      <<[->>+<<]>>[[-<<+>>] p:3 if ({1} != 0)
        >>>>>+<<<<<
      ]
      +>>>>+>
    ]
    <[[-]<<.<<] p:3
    <
  ]
  < p 1
  <<<<<.>>>>> 改行を出力
]
