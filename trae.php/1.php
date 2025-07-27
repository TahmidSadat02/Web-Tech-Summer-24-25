<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System</title>
    <style>
        :root {
            --primary-color: #1a73e8;
            --secondary-color: #f8f9fa;
            --accent-color: #4285f4;
            --text-color: #202124;
            --light-text: #5f6368;
            --error-color: #ea4335;
            --success-color: #34a853;
            --border-color: #dadce0;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--text-color);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        h2 {
            color: var(--light-text);
            font-size: 1.2rem;
            font-weight: normal;
        }

        .form-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
            margin-bottom: 20px;
        }

        .form-title {
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.5rem;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-color);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus,
        select:focus,
        textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 2px rgba(26, 115, 232, 0.2);
        }

        .radio-group {
            display: flex;
            gap: 15px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        button {
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button[type="submit"] {
            background-color: var(--primary-color);
            color: white;
        }

        button[type="submit"]:hover {
            background-color: #0d5bcd;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        button[type="reset"] {
            background-color: #f1f3f4;
            color: var(--text-color);
        }

        button[type="reset"]:hover {
            background-color: #e8eaed;
        }

        @media (max-width: 768px) {
            .container {
                width: 100%;
            }
            
            .form-card {
                padding: 20px;
            }
            
            .button-group {
                flex-direction: column;
            }
            
            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Bank Management System</h1>
            <h2>Your trusted Financial Partner</h2>
        </header>
        
        <div class="form-card">
            <h3 class="form-title">Customer Registration Form</h3>
            
            <form>
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                
                <div class="form-group">
                    <label>Gender</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="maritalStatus">Marital Status</label>
                    <select id="maritalStatus" name="maritalStatus" required>
                        <option value="" disabled selected>Select your marital status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="accountType">Account Type</label>
                    <select id="accountType" name="accountType" required>
                        <option value="" disabled selected>Select account type</option>
                        <option value="current">Current</option>
                        <option value="deposit">Deposit</option>
                        <option value="savings">Savings</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="initialDeposit">Initial Deposit Amount</label>
                    <input type="number" id="initialDeposit" name="initialDeposit" placeholder="Enter amount" min="0" required>
                </div>
                
                <div class="form-group">
                    <label for="mobileNumber">Mobile Number</label>
                    <input type="text" id="mobileNumber" name="mobileNumber" placeholder="Enter your mobile number" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" rows="3" placeholder="Enter your address here..." required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input type="text" id="occupation" name="occupation" placeholder="Enter your occupation">
                </div>
                
                <div class="form-group">
                    <label for="nid">National ID (NID)</label>
                    <input type="text" id="nid" name="nid" placeholder="Enter your National ID number" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Set Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a strong password" required>
                </div>
                
                <div class="form-group">
                    <label for="idProof">Upload ID Proof</label>
                    <input type="file" id="idProof" name="idProof" required>
                </div>
                
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the terms and conditions</label>
                </div>
                
                <div class="button-group">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>