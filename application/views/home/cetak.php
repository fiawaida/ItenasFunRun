<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <section class="page-content">
            <div class="page-wrapper">
                <div class="page-inner">
                    <div class="event-party-content">
                        <div id="shopify-section-event-information-template" class="shopify-section">
                            <div class="information_layout">
                                <div class="container">
                                    <div class="row">
                                        <div class="home_infoevent_inner">
                                            <div class="home_infoevent_content">
                                                <div class="infoevent_content col-sm-6">
                                                    <div class="infoevent_content_group">
                                                        <?php if ($undangan['acara'] == "akad") { ?>
                                                            <span class="title">Akad & Resepsi</span>
                                                        <?php } else { ?>
                                                            <span class="title">Resepsi</span>
                                                        <?php } ?>
                                                        <span class="location">
                                                            <?= $undangan['nama'] ?><br>
                                                        </span>
                                                        <?php if ($undangan['acara'] == "akad") { ?>
                                                            <div class="datetime">
                                                                <span class="date">March 19, 2022</span>
                                                                <span class="time">Akad : 12.30 - 14:30</span>
                                                            </div>
                                                            <div class="datetime">
                                                                <span class="date">March 19, 2022</span>
                                                                <span class="time">Resepsi : 16.00 - 18:00</span>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="datetime">
                                                                <span class="date">March 19, 2022</span>
                                                                <span class="time">16.00 - 18:00</span>
                                                            </div>
                                                        <?php } ?>
                                                        <h1><?= $undangan['jumlah'] ?> Person</h1>
                                                        <span class="event-gbr">
                                                            <img src="<?= base_url('assets/images/no_meja/' . $undangan['img_meja']) ?>">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<script type="text/javascript">
    window.print();
</script>