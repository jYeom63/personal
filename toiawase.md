## 問い合わせ対応用のタイプリスト
> ユーザーのステータス、チャージの詳細などは[ここ](https://admin.pollet.tech/)でチェック

#### User Type
```
'new_user';           // 新規ユーザ
'site_authenticated'; // 初回サイト認証完了済
'charge_requested';   // 初回チャージ申請完了済
'waiting_issue';      // 発番待ち
'issued';             // 発番済
'activated';          // アクティベート完了
'sign-out';           // ログアウト済み(アクティベートはされている)
'removed';            // 削除済み
```
#### Charge Type
(追加予定) 