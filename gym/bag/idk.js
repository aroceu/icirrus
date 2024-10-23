function switchMap() {
            if (document.getElementById('openbag')) {

                if (document.getElementById('openbag').style.display == 'none') {
                    document.getElementById('openbag').style.display = 'block';
                    document.getElementById('map').style.display = 'none';
                }
                else {
                    document.getElementById('openbag').style.display = 'none';
                    document.getElementById('map').style.display = 'block';
                }
            }
}

function switchDowsing() {
            if (document.getElementById('openbag')) {

                if (document.getElementById('openbag').style.display == 'none') {
                    document.getElementById('openbag').style.display = 'block';
                    document.getElementById('dowsing').style.display = 'none';
                }
                else {
                    document.getElementById('openbag').style.display = 'none';
                    document.getElementById('dowsing').style.display = 'block';
                }
            }
}


