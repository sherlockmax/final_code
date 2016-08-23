# final_code

終極密碼戰


遊戲規則:
  1. 1 - 40 號碼，自然亂數隨機取號，生成終極密碼
  2. 每局做多 3分30秒，有人中獎(選號中獎)或僅剩一球即結束該局，結束後10秒再開新局，可下注60秒
  3. 選號玩法: 選擇號碼與終極密碼相同
  3. 單雙玩法: 每次開出號碼的單或雙

期數編碼規則: 年4碼 + 月2碼 + 日2碼 + 流水號4碼 共 12碼

期數日期以美東時間判斷，時間採用時間戳記紀錄

ex:
201608150001 00:00:01 ~ 00:01:00
若無人中獎   201608150001 00:01:11 ~ 00:02:10
若有人中獎則 201608150002 00:01:11 ~ 00:02:10


三階段下注，每階段間格10秒


規則: 開期決定一終極密碼，每1分鐘隨機取號，若與終極密碼相同，則終止遊戲，越後面賠率越低
風險: 賠率計算, 終極密碼資料安全性
玩法: 單雙, 選號  (依球號分佈自由發揮)


ex:
下午 01:53 2016/8/23
終極密碼為 16

可下球號 1 ~ 40 (40取1)
0 ~ 1
隨機取一號碼，取與終極密碼內號碼可下注 (取35, 若取16則終止該期)

可下球號 1 ~ 35
1 ~ 2   玩法  單雙, 選號 (取3, 若取16則終止該期)

可下球號 3 ~ 35
隨機取一號碼，取與終極密碼內號碼可下注
2 ~ 3   玩法  單雙, 選號


結束開號碼 16


賠率公式 = 1 / 機率 * 0.92 (小數點後取兩位，不四捨五入)

ex:
選號初始賠率
 1 / 0.025 * 0.92  = 36.80


單雙初始賠率
1 / 0.5 * 0.92 = 1.84