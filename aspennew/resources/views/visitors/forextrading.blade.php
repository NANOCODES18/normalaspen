@extends("layouts.spacedcustomlayout")

@section("body")



<div class="main-content">
    
    <!--header section start-->
    <section class="breadcrumb-section" style="background-image: url('assets/images/forex-2.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb Section Start -->
            <div class="breadcrumb-content">
               <h5>FOREX</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section>

    <!--about us page content start-->
    <section class="section-padding about-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h1> What Is Forex?</h1>
                 <p>
The foreign exchange market is the “place” where currencies are traded. Currencies are important to most people around the world, whether they realize it or not because currencies need to be exchanged in order to conduct foreign trade and business. If you are living in the U.S. and want to buy cheese from France, either you or the company that you buy the cheese from has to pay the French for the cheese in euros (EUR). This means that the U.S. importer would have to exchange the equivalent value of U.S. dollars (USD) into euros. The same goes for traveling. A French tourist in Egypt can’t pay euros to see the pyramids because it’s not the locally accepted currency. As such, the tourist has to exchange the euros for the local currency, in this case, the Egyptian pound, at the current exchange rate.
</p><p>
The need to exchange currencies is the primary reason why the forex market is the largest, most liquid financial market in the world. It dwarfs other markets in size, even the stock market, with an average traded value of around the U.S. $2 billion per day. (The total volume changes all the time, but as of August 2012, the Bank for International Settlements (BIS) reported that the forex market traded in excess of U.S. $5.1 trillion per day.)</p>
<br><p>
One unique aspect of this international market is that there is no central marketplace for foreign exchange. Rather, currency trading is conducted electronically over-the-counter (OTC), which means that all transactions occur via computer networks between traders around the world, rather than on one centralized exchange. The market is open 24 hours a day, five and a half days a week, and currencies are traded worldwide in the major financial centers of London, New York, Tokyo, Zurich, Frankfurt, Hong Kong, Singapore, Paris, and Sydney – across almost every time zone. This means that when the trading day in the U.S. ends, the forex market begins in Tokyo and Hong Kong. As such, the forex market can be extremely active any time of the day, with price quotes changing constantly.</p>
<br><p>
    <strong>
Spot Market and the Forwards and Futures Markets</strong>
<br>
There are actually three ways that institutions, corporations, and individuals trade forex: the spot market, the forwards market, and the futures market. The forex trading in the spot market always has been the largest market because it is the “underlying” real asset that the forwards and futures markets are based on. In the past, the futures market was the most popular venue for traders because it was available to individual investors for a longer period of time. However, with the advent of electronic trading and numerous forex brokers, the spot market has witnessed a huge surge in activity and now surpasses the futures market as the preferred trading market for individual investors and speculators. When people refer to the forex market, they usually are referring to the spot market. The forwards and futures markets tend to be more popular with companies that need to hedge their foreign exchange risks out to a specific date in the future.</p>
<br><p>
    <strong>
What is the spot market?</strong>
<br>
More specifically, the spot market is where currencies are bought and sold according to the current price. That price, determined by supply and demand, is a reflection of many things, including current interest rates, economic performance, sentiment towards ongoing political situations (both locally and internationally), as well as the perception of the future performance of one currency against another. When a deal is finalized, this is known as a “spot deal”. It is a bilateral transaction by which one party delivers an agreed-upon currency's amount to the counterparty and receives a specified amount of another currency at the agreed-upon exchange rate value. After a position is closed, the settlement is in
cash. Although the spot market is commonly known as one that deals with transactions in the present (rather than the future), these trades actually take two days for settlement.</p>
<br><p>
    <strong>What are the forwards and futures markets?</strong>
<br>
Unlike the spot market, the forwards and futures markets do not trade actual currencies. Instead, they deal in contracts that represent claims to a certain currency type, a specific price per unit, and a future date for settlement.</p>
<p>
In the forwards market, contracts are bought and sold over-the-counter (OTC) between two parties, who determine the terms of the agreement between themselves.
<br></p><p>
In the futures market, futures contracts are bought and sold based upon a standard size and settlement date on public commodities markets, such as the Chicago Mercantile Exchange. In the U.S., the National Futures Association regulates the futures market. Futures contracts have specific details, including the number of units being traded, delivery and settlement dates, and minimum price increments that cannot be customized. The exchange acts as a counterpart to the trader, providing clearance and settlement.
<br></p>
Both types of contracts are binding and are typically settled for cash for the exchange in question upon expiry, although contracts can also be bought and sold before they expire. The forwards and futures markets can offer protection against risk when trading currencies. Usually, big international corporations use these markets in order to hedge against future exchange rate fluctuations, but speculators take part in these markets as well.
<br><p>
    <i>
Note that you’ll see the terms: FX, forex, foreign-exchange market, and currency market. These terms are synonymous and all refer to the forex market.</i>
<br></p>
    <h3 class="text-center">Forex markets chart</h3>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
  <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
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
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": true,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_9c7c3"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text"> Chart</span></a></div>
  <script type="text/javascript" src="../s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 610,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_9c7c3"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->


   <h3> How to Get Started with Forex Trading</h3>
   <p>
Trading forex is similar to equity and crypto  trading. Here are some steps to get yourself started on the forex trading journey.
<ul>
    <li>Set up an account: You will need a forex trading account at a brokerage to get started with forex trading. {{$compd? $compd->companyname :"company name"}} does not charge commissions. Instead, we make money through spreads (also known as pips) between the buying and selling prices.</li>
<li>
Fund your account: The final step will be funding your wallet by transferring Bitcoin or any other cryptocurrency of your choice to it. Trading begins immediately deposit is confirmed and payments are made daily to your trading accounts. Cryptocurrency deposits are made and confirmed within 24 hours.
</li>
</ul>
</p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Online Section End -->

<div class="clearfix"></div>



@endsection
