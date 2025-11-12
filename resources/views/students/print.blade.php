<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $student->full_name }} - Student Record</title>
    <style>
        @page {
            margin: 0.75in;
            size: A4;
        }
        
        @page :first {
            margin-top: 0.5in;
        }
        
        /* Hide browser print headers and footers */
        @media print {
            @page { margin: 0; }
            body { margin: 0.75in; }
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Times New Roman', serif;
            font-size: 12pt;
            line-height: 1.5;
            color: #000;
            background: white;
        }
        
        .header {
            text-align: center;
            border-bottom: 3px solid #000;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        
        .header h1 {
            font-size: 28pt;
            font-weight: bold;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }
        
        .header .subtitle {
            font-size: 14pt;
            color: #333;
            margin-bottom: 5px;
        }
        
        .student-summary {
            background: #f8f9fa;
            border: 2px solid #333;
            padding: 25px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .student-name {
            font-size: 24pt;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .student-id {
            font-size: 16pt;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }
        
        .quick-info {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            text-align: left;
            margin-top: 15px;
        }
        
        .quick-info div {
            font-size: 11pt;
        }
        
        .section {
            margin-bottom: 30px;
            page-break-inside: avoid;
        }
        
        .section-title {
            font-size: 18pt;
            font-weight: bold;
            color: #000;
            border-bottom: 2px solid #333;
            padding-bottom: 8px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .field-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-bottom: 20px;
        }
        
        .field {
            margin-bottom: 15px;
            display: flex;
            align-items: baseline;
        }
        
        .field-label {
            font-weight: bold;
            color: #333;
            min-width: 140px;
            margin-right: 15px;
            font-size: 11pt;
        }
        
        .field-value {
            color: #000;
            font-size: 12pt;
            flex: 1;
        }
        
        .full-width-field {
            grid-column: 1 / -1;
        }
        
        .signature-section {
            margin-top: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        
        .signature-box {
            text-align: center;
            border-top: 1px solid #333;
            padding-top: 10px;
            margin-top: 40px;
        }
        
        .signature-label {
            font-size: 10pt;
            color: #666;
        }
        
        .footer {
            text-align: center;
            font-size: 9pt;
            color: #666;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            margin-top: 50px;
            page-break-inside: avoid;
        }
        
        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 72pt;
            color: rgba(0, 0, 0, 0.05);
            z-index: -1;
            font-weight: bold;
        }
        
        @media screen {
            body {
                max-width: 8.5in;
                margin: 0 auto;
                padding: 20px;
                box-shadow: 0 0 20px rgba(0,0,0,0.1);
            }
            
            .print-button {
                position: fixed;
                top: 20px;
                right: 20px;
                background: #007bff;
                color: white;
                border: none;
                padding: 12px 24px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            }
            
            .print-button:hover {
                background: #0056b3;
            }
        }
        
        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="watermark">OFFICIAL</div>
    
    <button class="print-button" onclick="printDocument()">🖨️ Print Document</button>
    
    <script>
        function printDocument() {
            const style = document.createElement('style');
            style.textContent = `
                @media print {
                    @page { 
                        margin: 0;
                        size: A4;
                    }
                    body { 
                        margin: 0.75in;
                        -webkit-print-color-adjust: exact;
                        color-adjust: exact;
                    }
                }
            `;
            document.head.appendChild(style);
            
            window.print();
            
            setTimeout(() => {
                document.head.removeChild(style);
            }, 1000);
        }
    </script>
    
    <div class="header">
        <h1>Student Record System</h1>
        <p class="subtitle">Official Student Information Record</p>
        <p class="subtitle">{{ config('app.name', 'Educational Institution') }}</p>
        <p class="subtitle">Generated on {{ now()->format('F j, Y \a\t g:i A') }}</p>
    </div>

    <div class="student-summary">
        <div class="student-name">{{ $student->full_name }}</div>
        <div class="student-id">Student ID: {{ $student->student_id }}</div>
        
        <div class="quick-info">
            <div>
                <strong>Program:</strong><br>
                {{ $student->course_program }}
            </div>
            <div>
                <strong>Year Level:</strong><br>
                Year {{ $student->year_level }}
            </div>
            <div>
                <strong>Status:</strong><br>
                Active Student
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="section-title">Personal Information</h2>
        <div class="field-grid">
            <div>
                <div class="field">
                    <span class="field-label">Full Name:</span>
                    <span class="field-value">{{ $student->full_name }}</span>
                </div>
                <div class="field">
                    <span class="field-label">Student ID:</span>
                    <span class="field-value">{{ $student->student_id }}</span>
                </div>
                <div class="field">
                    <span class="field-label">Date of Birth:</span>
                    <span class="field-value">{{ $student->date_of_birth->format('F j, Y') }}</span>
                </div>
                <div class="field">
                    <span class="field-label">Age:</span>
                    <span class="field-value">{{ $student->date_of_birth->age }} years old</span>
                </div>
            </div>
            <div>
                <div class="field">
                    <span class="field-label">Gender:</span>
                    <span class="field-value">{{ $student->gender }}</span>
                </div>
                <div class="field">
                    <span class="field-label">Email Address:</span>
                    <span class="field-value">{{ $student->email }}</span>
                </div>
                @if($student->phone)
                <div class="field">
                    <span class="field-label">Phone Number:</span>
                    <span class="field-value">{{ $student->phone }}</span>
                </div>
                @endif
                <div class="field">
                    <span class="field-label">Enrollment Date:</span>
                    <span class="field-value">{{ $student->created_at->format('F j, Y') }}</span>
                </div>
            </div>
            @if($student->address)
            <div class="field full-width-field">
                <span class="field-label">Home Address:</span>
                <span class="field-value">{{ $student->address }}</span>
            </div>
            @endif
        </div>
    </div>

    <div class="section">
        <h2 class="section-title">Academic Information</h2>
        <div class="field-grid">
            <div>
                <div class="field">
                    <span class="field-label">Course/Program:</span>
                    <span class="field-value">{{ $student->course_program }}</span>
                </div>
                <div class="field">
                    <span class="field-label">Year Level:</span>
                    <span class="field-value">Year {{ $student->year_level }}</span>
                </div>
            </div>
            <div>
                <div class="field">
                    <span class="field-label">Academic Status:</span>
                    <span class="field-value">Active</span>
                </div>
                <div class="field">
                    <span class="field-label">Record Last Updated:</span>
                    <span class="field-value">{{ $student->updated_at->format('F j, Y') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <h2 class="section-title">Record Verification</h2>
        <div class="field-grid">
            <div>
                <div class="field">
                    <span class="field-label">Document Generated:</span>
                    <span class="field-value">{{ now()->format('F j, Y \a\t g:i A') }}</span>
                </div>
                <div class="field">
                    <span class="field-label">Generated By:</span>
                    <span class="field-value">Student Record System</span>
                </div>
            </div>
            <div>
                <div class="field">
                    <span class="field-label">Document Type:</span>
                    <span class="field-value">Official Student Record</span>
                </div>
                <div class="field">
                    <span class="field-label">Verification Code:</span>
                    <span class="field-value">{{ strtoupper(substr(md5($student->id . $student->student_id), 0, 8)) }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="signature-section">
        <div>
            <div class="signature-box">
                <div class="signature-label">Registrar's Office</div>
            </div>
        </div>
        <div>
            <div class="signature-box">
                <div class="signature-label">Date of Issue</div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p><strong>{{ config('app.name', 'Student Management System') }}</strong></p>
        <p>This is an official document generated from the Student Record System | {{ now()->format('F j, Y \a\t g:i A') }}</p>
        <p>For verification, contact the Registrar's Office</p>
    </div>
</body>
</html>