print('mencoba percabangan di python')

nama = 'ade'
harian = 10
quiz = 50
uts = 60
uas = 80

hasil = (harian*0.1)+(quiz*0.2)+(uts*0.3)+(uas*0.4)

if hasil >= 85:
    print(nama+'mendapat Grade A dengan Hasil nilai')
if hasil >= 75:
    print('mendapat Grade B dengan Hasil nilai')
if hasil >= 65:
    print('mendapat Grade C dengan Hasil nilai')

if hasil >= 50:
    print('mendapat Grade D dengan Hasil nilai')
    print(hasil)
if hasil <= 40:
    print('mendapat Grade E dengan Hasil nilai')
