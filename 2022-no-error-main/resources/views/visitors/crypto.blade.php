@extends('layouts.spacedcustomlayout')

@section('body')
    <div class="main-content">


        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/crypt1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>Cryptocurrency</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <!--<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank">-->
            <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "BTC/USD"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "ETH/USD"
                        },
                        {
                            "description": "BNB/USD",
                            "proName": "FTX:BNBUSD"
                        },
                        {
                            "description": "LTC/USD",
                            "proName": "BITFINEX:LTCUSD"
                        },
                        {
                            "description": "DOG/USD",
                            "proName": "BITFINEX:DOGUSD"
                        },
                        {
                            "description": "ADA/USD",
                            "proName": "BINANCE:ADAUSDT"
                        }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "light",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->

        <!--about us page content start-->
        <section class="section-padding about-us-page">
            <div class="container">
                <div class="row">



                    <div class="col-md-12">
                        <h1>Cryptocurrencies</h1>
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a
                                    href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
                                    target="_blank"><span class="blue-text">Cryptocurrency Markets Chart</span></a> </div>
                            <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                {
                                    "width": 1000,
                                    "height": 490,
                                    "defaultColumn": "overview",
                                    "screener_type": "crypto_mkt",
                                    "displayCurrency": "USD",
                                    "colorTheme": "light",
                                    "locale": "en",
                                    "isTransparent": true
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->

                        <div>


                        </div>
                        <p>
                            A cryptocurrency is a digital or virtual currency that uses cryptography for security. It is
                            difficult to counterfeit because of this security feature. A defining feature of a
                            cryptocurrency and arguably its most endearing allure, is its organic nature; it is not issued
                            by any central authority, rendering it theoretically immune to government interference or
                            manipulation. The first cryptocurrency to capture the public imagination is Bitcoin, which was
                            launched in 2009 by an individual or group known under the pseudonym, Satoshi Nakamoto. As of
                            May 2018, there were over 17 million bitcoins in circulation with a total market value of over
                            $140 billion. Bitcoin’s success has spawned several competing cryptocurrencies, such as
                            Litecoin, Ethereum, Ripple, etc. </p>

                        <p>
                            <strong>
                                Cryptocurrency Benefits and Drawbacks</strong>
                            <br>
                        <ul>
                            <li>
                                Cryptocurrencies make it easier to transfer funds between two parties in a transaction;
                                these transfers are facilitated through the use of public and private keys for security
                                purposes. These fund transfers are done with minimal processing fees, allowing users to
                                avoid the steep fees charged by most banks and financial institutions for wire transfers.
                            <li>
                                Central to the appeal and functions of Bitcoin Technology, it is used to store an online
                                ledger of all the transactions that have ever been conducted using bitcoins, providing a
                                data structure for this ledger that is exposed to a limited threat from hackers and can be
                                copied across all computers running Bitcoin software. Every new block generated must be
                                verified by the ledgers of each user on the market, making it almost impossible to forge
                                transaction histories. Many experts see this blockchain as having important uses in
                                technologies, such as online voting, crowdfunding and major financial institutions such as
                                JP Morgan Chase see potential in cryptocurrencies to lower transaction costs by making
                                payment processing more efficient.
                            </li>
                            <li>
                                However, because cryptocurrencies are virtual and do not have a central repository, a
                                digital cryptocurrency balance can be wiped out by a computer crash if a backup copy of the
                                holdings does not exist. Since prices are based on supply and demand, the rate at which a
                                cryptocurrency can be exchanged for another currency can fluctuate widely. </li>
                            <li>
                                The anonymous nature of cryptocurrency transactions makes them well-suited for a host of
                                nefarious activities, such as money laundering and tax evasion. However, cryptocurrency
                                advocates often value the anonymity highly. Cryptocurrencies are also considered by some
                                economists to be a speculative bubble concerned especially that the currency units such as
                                Bitcoins, are not rooted in any material goods. Bitcoin has indeed experienced some rapid
                                surges and collapses in value.
                            </li>
                            <li>
                                Cryptocurrencies are not immune to the threat of hacking. In Bitcoin’s short history, the
                                company has been subject to over 40 thefts, including a few that exceeded $1 million in
                                value. Still, many observers look at cryptocurrencies as hope that a currency can exist that
                                preserves value, facilitates exchange, is more transportable than hard metals and is outside
                                the influence of central banks and governments.
                            </li>
                        </ul>
                        <hr>


                        </p>




                    </div>

                </div>

                <div class="row">

                    <strong>
                        Our Cryptocurrency Mining Operations</strong>
                    <br>
                    <div class="col-md-12">
                        <p>
                            We provide a multi-algorithm, multi-coin cloud mining service using the latest technology -
                            without any pool fees. The ultimate goal of our mining operation is to make cryptocurrency
                            mining an easy, smart, and rewarding experience for all. Our services already attracted more
                            than 2,000 active clients.
                            <br>
                            Our Mining facility is being continuously upgraded for mining state-of-the-art Blockchain
                            technology. Aspen’s computational performance is achieved with specifically designed mining rigs
                            that efficiently mine hashing algorithms for various cryptocurrencies such as Bitcoin, Ethereum,
                            Zcash, Dash, Monero, and others.
                            <br>
                            Our Mining equipments are powered by a setup of optimized GPUs (graphic processing units). These
                            GPUs are placed in ‘Rigs’ which are specifically designed to house as much hashing power as
                            efficiently as possible. The miner's software is configured for maximum performance by mining
                            Kernels (hardware operating systems) like that we’ve developed in-house.
                        </p>
                    </div>

                    <hr>


                </div>

                <div class="row">
                    <h3>Our Mining Rigs</h3>
                    <div class="col-md-6">
                        <img class="img" src="assets/images/rig2.html">
                    </div>

                    <div class="col-md-6">
                        <img class="img" src="assets/images/rig1.jpg">
                    </div>
                </div>

            </div>





        </section>
    </div>

    <!-- Online Section End -->

    <div class="clearfix"></div>
@endsection
