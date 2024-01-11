# Badminton-Games-Analysis
Introduction to Database Systems Final Project

Our Functionality 

1.查詢比賽(nation/match)

  -輸入
  
    比賽項目 ms/md/ws/wd/xd (使用選單)
    
    運動員名字 / 國家
    
  -輸出
  
    Team1 v.s.Team2 (運動員國籍及姓名)： t1.team_one(two)_nationality,  t1.team_one(two)_player 

    賽事：t1.tournament, t1.tournament_type
    
    日期：t1.date
    
    比分：t1.game_1/2/3_score
    
    連續得分：t1.team_one(two)_most_consecutive_points
    
    局點：t1.team_one(two)_game_points
    
  -SELECT 的條件：
  
    在比賽項目 ms/md/ws/wd/xd 中 
    
    運動員名字：
    
    SELECT兩次後UNION(因為有player1 player2，若為雙打則需四次)，WHERE t1.team_one(two)_player_one(two)=“運動員名字”
    
    比賽的日期：
    
    同理，但條件改為 WHERE t1.nationality=“國家”
    

2.查詢特定運動員比賽結果、統計資料(player)

  -輸入
  
    比賽項目 ms/md/ws/wd/xd (使用選單)
    
    運動員名字
    
  -輸出
  
    贏得冠軍場數 (在round = final 時贏的次數)
    
    SUM(CASE WHEN t1.winner=1 AND t1.round=“Final” THEN 1 ELSE 0 END) AS champion_cnt
    
    參賽次數 (參加過幾個錦標賽)
    
    COUNT(DISTINCT t1.tournament) AS entry_cnt
    
    勝率(勝場數/敗場數，不包括退賽)
    
    SUM(CASE WHEN t1.winner=1 THEN 1 ELSE 0 END) AS win_cnt
    
    SUM(CASE WHEN t1.winner=2 THEN 1 ELSE 0 END) AS lose_cnt
    
    總場數 (總共打過幾場) COUNT()
    
  -SELECT 的條件：
  
    在比賽項目 ms/md/ws/wd/xd 中 
    
    t1.team_one(two)_player=“運動員名字”，分兩個 table SELECT 分別為 nt1、nt2 (雙打則有nt1、nt2、nt3、nt4)，最外層再將全部加起來，其中勝率是將 win_cnt 和 lose_cnt 分別加起來再除
    

3.查詢特定國家比賽結果、統計資料(國家、比賽項目)(team)

  -輸入
  
    比賽項目 ms/md/ws/wd/xd (使用選單)
    
    國家
    
  -輸出
  
    贏得冠軍場數 (在round = final 時贏的次數)
    
    勝率(勝場數/敗場數，不包括退賽)
    
    總場數 (總共打過幾場)
    
  -SELECT 的條件：
  
    和上一題一樣，但改為 t1.team_one(two)_nationality=“國家”
    

4.熱門排行(球員/國家)

  -更新
  
    登入後使用者每做一次查詢，如果已經查過則把 times 加一
    
    沒有查過則新增一筆資料(id,  player / nationality, times = 1)
    
  -輸出
  
    球員 / 國家：t1.player / t1.nationality
    
    查詢次數：SUM(t1.times) AS times
    
  -SELECT 的條件：
  
    在 qurey_times_player / qurey_times_nationality 中 
    
    WHERE t1.id=使用者id
    
    ORDER BY 總共的times  LIMIT 5
    

5.喜愛球員/國家

  -更新
  
    每做一次查詢，如果已經查過則把 times 加一
    
    沒有查過則新增一筆資料(id,  player / nationality, times = 1)
    
  -輸出
  
    球員 / 國家：t1.player / t1.nationality
    
    查詢次數：SUM(t1.times) AS times
    
  -SELECT 的條件：
  
    在 qurey_times_player / qurey_times_nationality 中 
    
    GROUP BY t1.player / t1.nationality
    
    ORDER BY t1.times  LIMIT 5
    
    
6.建立帳號

  -註冊
  
    INSERT INTO `user`(`username`, `password`)
    
  -登入
  
    SELECT * FROM user WHERE username = 輸入的username AND password = 輸入的password
    
  -刪除
  
    DELETE FROM users WHERE id = 登入的id
    

The Steps Of Reproducibility

  線上網頁連結: https://badminton-helper.com/
  
  如果想在本地端運行網站可參考以下步驟:
  
  1. 從Github上下載所有檔案

  https://github.com/111550123/Badminton-Games-Analysis/tree/main

  2. 下載並且安裝XAMPP

  https://www.apachefriends.org/

  3. 將除了`badminton.sql`以外的檔案放入XAMPP資料夾中，詳細步驟可參考此連結教學

  https://medium.com/@sui16783/%E6%95%99%E5%AD%B8-%E5%A6%82%E4%BD%95%E7%94%A8-xampp-%E5%9C%A8%E8%87%AA%E5%B7%B1%E7%9A%84%E9%9B%BB%E8%85%A6%E6%9E%B6%E8%A8%AD%E7%AC%AC%E4%B8%80%E5%80%8B%E7%B6%B2%E7%AB%99-d131ca1bd9e9

  4. 開啟XAMPP並且啟動Apache以及MySQL

    Apache --> Start
    MySQL  --> Start

  5. 使用瀏覽器進入phpMyAdmin

    locahost/phpMyAdmin/

  6. 將`badminton.sql`匯入

  7. 最後在瀏覽器輸入 `localhost` 應該就能看到完整網頁

