function switchBag() {
            if (document.getElementById('bag')) {

                if (document.getElementById('bag').style.display == 'none') {
                    document.getElementById('bag').style.display = 'block';
                    document.getElementById('gym').style.display = 'none';
                }
                else {
                    document.getElementById('bag').style.display = 'none';
                    document.getElementById('gym').style.display = 'block';
                }
            }
}
