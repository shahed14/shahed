<?php
include "database_connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliate Marketing Reports</title>
    <style type="text/css">
        h2 , a{
            font-size: 16px;
            font-weight: bold;
            color: darkred;
            font-family: cursive;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand " href="#">Affiliate Marketing Reports </a>
    <a href="adminhome.php" class="btn btn-primary">go to home</a>
  </nav>
    <div class="container">
        <hr>

        <?php
        // Function to retrieve affiliates data
        function getAffiliatesData()
        {
            global $connection;

            // Implement logic to fetch affiliates data from the "affiliates" table
            $query = "SELECT * FROM affiliates";
            $result = $connection->query($query);

            $affiliatesData = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $affiliatesData[] = $row;
                }
            }

            return $affiliatesData;
        }

// Function to generate affiliate earnings report
function generateEarningsReport($startDate, $endDate) {
    global $connection;

    // Implement logic to generate earnings report based on the given date range
    $query = "SELECT a.affiliate_name, SUM(s.revenue) AS total_earnings
              FROM affiliates a
              INNER JOIN sales s ON a.id = s.affiliate_id
              WHERE (s.start_date <= '$endDate' AND s.end_date >= '$startDate')
              GROUP BY a.id";
    $result = $connection->query($query);

    $earningsReport = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $earningsReport[] = $row;
        }
    }

    return $earningsReport;
}





        // Function to generate affiliate performance report
        function generateAffiliatePerformanceReport()
        {
            global $connection;

            // Implement logic to generate affiliate performance report
            $query = "SELECT a.affiliate_name, COUNT(s.id) AS total_sales, SUM(s.revenue) AS total_earnings
                      FROM affiliates a
                      LEFT JOIN sales  s ON a.id = s.affiliate_id
                      GROUP BY a.id";
            $result = $connection->query($query);

            $affiliatePerformanceReport = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $affiliatePerformanceReport[] = $row;
                }
            }

            return $affiliatePerformanceReport;
        }

        // Function to generate referral traffic report
        function generateReferralTrafficReport()
        {
            global $connection;

            // Implement logic to generate referral traffic report
            $query = "SELECT a.affiliate_name, COUNT(r.id) AS total_referrals
                      FROM affiliates a
                      LEFT JOIN referral_traffic r ON a.id = r.affiliate_id
                      GROUP BY a.id";
            $result = $connection->query($query);

            $referralTrafficReport = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $referralTrafficReport[] = $row;
                }
            }

            return $referralTrafficReport;
        }

        // Function to generate campaign performance report
        function generateCampaignPerformanceReport()
        {
            global $connection;

            // Implement logic to generate campaign performance report
            $query = "SELECT c.campaign_name, COUNT(s.id) AS total_sales, SUM(s.revenue) AS total_earnings
                      FROM campaign c
                      LEFT JOIN sales s ON c.id = s.campaign_id
                      GROUP BY c.id";
            $result = $connection->query($query);

            $campaignPerformanceReport = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $campaignPerformanceReport[] = $row;
                }
            }

            return $campaignPerformanceReport;
        }

        // Function to generate geographic performance report
        function generateGeographicPerformanceReport()
        {
            global $connection;

            // Implement logic to generate geographic performance report
            $query = "SELECT a.country, COUNT(s.id) AS total_sales, SUM(s.revenue) AS total_earnings
                      FROM affiliates a
                      LEFT JOIN sales s ON a.id = s.affiliate_id
                      GROUP BY a.country";
            $result = $connection->query($query);

            $geographicPerformanceReport = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $geographicPerformanceReport[] = $row;
                }
            }

            return $geographicPerformanceReport;
        }

        // Usage examples
        $affiliatesData = getAffiliatesData();
        $earningsReport = generateEarningsReport('2023-06-01', '2023-06-30');        $affiliatePerformanceReport = generateAffiliatePerformanceReport();
        $referralTrafficReport = generateReferralTrafficReport();
        $campaignPerformanceReport = generateCampaignPerformanceReport();
        $geographicPerformanceReport = generateGeographicPerformanceReport();
        ?>

        <h2>Affiliates Data</h2>
        <p class="text-muted">This table displays the list of affiliates along with their IDs, names, emails, and websites.</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Affiliate ID</th>
                    <th>Affiliate Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($affiliatesData as $affiliate) { ?>
                    <tr>
                        <td><?php echo $affiliate['id']; ?></td>
                        <td><?php echo $affiliate['affiliate_name']; ?></td>
                        <td><?php echo $affiliate['email']; ?></td>
                        <td><?php echo $affiliate['country']; ?></td>
                        <td><?php echo $affiliate['created_at']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2>Earnings Report</h2>
         <p class="text-muted">This table shows the total earnings for each affiliate during the specified date range.</p>
                <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Affiliate Name</th>
                    <th>Total Earnings</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($earningsReport as $earnings) { ?>
                    <tr>
                        <td><?php echo $earnings['affiliate_name']; ?></td>
                        <td><?php echo $earnings['total_earnings']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2>Affiliate Performance Report</h2>
                <p class="text-muted">This table presents the total sales and earnings for each affiliate.</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Affiliate Name</th>
                    <th>Total Sales</th>
                    <th>Total Earnings</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($affiliatePerformanceReport as $performance) { ?>
                    <tr>
                        <td><?php echo $performance['affiliate_name']; ?></td>
                        <td><?php echo $performance['total_sales']; ?></td>
                        <td><?php echo $performance['total_earnings']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2>Referral Traffic Report</h2>
                <p class="text-muted">This table displays the total number of referrals for each affiliate.</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Affiliate Name</th>
                    <th>Total Referrals</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($referralTrafficReport as $traffic) { ?>
                    <tr>
                        <td><?php echo $traffic['affiliate_name']; ?></td>
                        <td><?php echo $traffic['total_referrals']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2>Campaign Performance Report</h2>
                <p class="text-muted">This table shows the total sales and earnings for each campaign.</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Campaign Name</th>
                    <th>Total Sales</th>
                    <th>Total Earnings</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campaignPerformanceReport as $campaign) { ?>
                    <tr>
                        <td><?php echo $campaign['campaign_name']; ?></td>
                        <td><?php echo $campaign['total_sales']; ?></td>
                        <td><?php echo $campaign['total_earnings']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2>Geographic Performance Report</h2>
                <p class="text-muted">This table provides insights into sales and earnings based on geographic regions.</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Total Sales</th>
                    <th>Total Earnings</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($geographicPerformanceReport as $geographic) { ?>
                    <tr>
                        <td><?php echo $geographic['country']; ?></td>
                        <td><?php echo $geographic['total_sales']; ?></td>
                        <td><?php echo $geographic['total_earnings']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
