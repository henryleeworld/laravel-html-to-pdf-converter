# Laravel 8 HTML 轉 PDF 轉換器

引入 barryvdh 的 laravel-dompdf 套件來擴增使用 DomPDF 將 HTML 轉換為 PDF。DomPDF 遵循 CSS2.1 的 HTML 佈局，它是用 PHP 編寫的渲染引擎。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 安裝需要的字體，把字型的資訊載入到 DomPDF 中，並把自型檔案複製到 storage/fonts 底下。範例：php load_font.php "hanwangming light" wt001.ttf。
```sh
php load_font.php "{字體名稱}" {字體檔案名 + 副檔名}
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/users/show` 來瀏覽使用者資料，點擊按鈕儲存成 PDF。

----

## 畫面截圖
![](https://i.imgur.com/zK3d3LL.png)
> 顯示所有使用者資料清單

![](https://i.imgur.com/7twXXrm.png)
> 下載 PDF 後使用 Adobe Acrobat Reader 確認中文是否亂碼
