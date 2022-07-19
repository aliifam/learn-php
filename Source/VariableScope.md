# Variable Scope

- **Global Scope** adalah variabel yang dibuat diluar fungsi, tidak dapat diakses di dalam fungsi, pokoknya dalam block function tidak bisa akses global scope variabel

- **Local Scope** adalah variabel yang dibuat di dalam fungsi, hanya dapat diakses dalam block fungsi tersebut 

- **Static Scope** adalah variabel yang dibuat di dalam block fungsi alia hanya bisa di set le local variable, jika local variable menjadi static maka siklus hidupnya tidak berhenti hanya pada aat fungsi selesai dieksekusi. artinya jika fungsi dieksekui lagi maka satic variable maih memiliki value dari proses ebelumnya.

## Global Keyword

global Keyword untuk mengakses variable diluar function (global scope) agar dapat dikases di dalam block function