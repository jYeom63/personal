- pull
- migration
- ./yii seed(populates DB / turn back into original state)
- `tel_certification` contains 認証番号
- `monthly_trading_history_cache` contains cache - delete this to refresh cache
```
insert into orico_card (pollet_user_id, reference_id, card_type, registration_status, monthly_charge_value, max_charge_value, created_at, updated_at) values(999995, 110518138170, 'real-card', 'activated', 1, 1, now(), now());
```
