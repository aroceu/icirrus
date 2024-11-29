function switchBag() {
            if (document.getElementById('openbag')) {

                if (document.getElementById('openbag').style.display == 'none') {
                    document.getElementById('openbag').style.display = 'block';
                    document.getElementById('bag').style.display = 'none';
                }
                else {
                    document.getElementById('openbag').style.display = 'none';
                    document.getElementById('bag').style.display = 'block';
                }
            }
}
