<script src="https://code.responsivevoice.org/responsivevoice.js?key=CGqxD5Ed"></script>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row" id="wrappervoice" style="position: relative;">
                <div class="col-12 d-flex justify-content-center">
                    <img src="<?= base_url('/assets/sound.gif') ?>" alt="this slowpoke moves"  style="width: 200px;"/>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.historyspeak = [];
    window.speak = [];

    function render(){
        $("#wrappervoice").html(`
            <div class="col-12 d-flex justify-content-center">
                <img src="<?= base_url('/assets/sound.gif') ?>" alt="this slowpoke moves"  style="width: 200px;"/>
            </div>
        `)
        for (const item of window.speak){
            $("#wrappervoice").append(`
                <div class="col-12 mt-2">
                    <div class="row ">
                        <div style="width: 40px;">
                            <i class="mdi mdi-volume-high " style="font-size: 25px;"></i> 
                        </div>
                        <div class="col pt-1">
                            <b>${item.message}</b>
                        </div>
                    </div>
                </div>
            `)
        }
    }
    function getListJadwal(){
        $.ajax({
            url: '<?= base_url() ?>/C_JadwalKuliah/json',
            dataType: 'json',
            success: resp => {
                window.list_jadwal = resp
            },
            error: err => {
                console.log(err)
            }
        })
    }

    function onEndSpeak(){
        window.isCalling = false
        console.log('allog::', 'onend')
        console.log(window.speak, 'spealk')
    }
    function onStartSpeak(item){
        window.isCalling = true
        window.speak = window.speak.filter(flt => flt.id != item.id)
        render()
        console.log('allog::', 'onstart', window.speak)
    }

    $(function(){
        responsiveVoice.enableWindowClickHook()
        responsiveVoice.clickEvent();
        getListJadwal()
        window.intervalFetch = setInterval(() => {
            getListJadwal()
        }, 10000);
        window.isCalling = false
        window.intervalVoice = setInterval(() => {
            if (window.list_jadwal.length > 0){
                if (window.isCalling == false){
                    const jadwalMulai = window.list_jadwal.filter(item => moment(new Date()).format('YYYY-MM-DD') == item.tanggal && item.jam_mulai == moment(new Date()).format('HH:mm')+':00')
                    const jadwalSelesai = window.list_jadwal.filter(item => moment(new Date()).format('YYYY-MM-DD') == item.tanggal && item.jam_selesai == moment(new Date()).format('HH:mm')+':00')
                    
                    for (const item of jadwalMulai){
                        const [check = null] = window.historyspeak.filter(flt => flt.id == item.id_trx_jadwal_kuliah+'mulai')
                        if (check == null){
                            window.historyspeak.push({
                                id_trx: item.id_trx_jadwal_kuliah,
                                id: item.id_trx_jadwal_kuliah+'mulai',
                            })
                            window.speak.push({
                                id_trx: item.id_trx_jadwal_kuliah,
                                id: item.id_trx_jadwal_kuliah+'mulai',
                                message: `Mata kuliah ${item.nm_mst_mata_kuliah}; akan segera di mulai di kelas ${item.nm_mst_kelas}.`,
                            })
                        }
                    }
                    for (const item of jadwalSelesai){
                        const [check = null] = window.historyspeak.filter(flt => flt.id == item.id_trx_jadwal_kuliah+'selesai')
                        if (check == null){
                            window.historyspeak.push({
                                id_trx: item.id_trx_jadwal_kuliah,
                                id: item.id_trx_jadwal_kuliah+'selesai',
                                type: 'selesai'
                            })
                            window.speak.push({
                                id_trx: item.id_trx_jadwal_kuliah,
                                id: item.id_trx_jadwal_kuliah+'selesai',
                                message: `Mata kuliah ${item.nm_mst_mata_kuliah}; telah selesai di kelas ${item.nm_mst_kelas}.`,
                            })
                        }
                    }

                    render()
                }
            }
        }, 1000); 
        window.intervalVoiceCall = setInterval(() => {
            if (responsiveVoice.isPlaying() == false && window.speak.length > 0){
                for (const item of window.speak){
                    if (window.isCalling == false){
                        responsiveVoice.speak(item.message, 'Indonesian Male', {
                            onstart: () => onStartSpeak(item),
                            onend: onEndSpeak
                        })
                    }
                    
                }
            }
        }, 3000); 
        
    })
</script>