<?php
session_start();

// Configuration
$password = 'test123'; // Change this for production!
$base_dir = './'; // Base directory
$img_dir = ''; // Images directory (empty since paths are relative to current directory)

// Comprehensive image configuration based on your complete folder structure
$image_categories = [
    'hero' => [
        'title' => 'Hero Section',
        'folder' => 'hero/',
        'images' => [
            'hero-1' => ['file' => 'hero-1.jpg', 'title' => 'Hero Image 1'],
            'hero-2' => ['file' => 'hero-2.jpg', 'title' => 'Hero Image 2'],
            'im1' => ['file' => 'im1.jpg', 'title' => 'Hero Image 3'],
            'im2' => ['file' => 'im2.jpg', 'title' => 'Hero Image 4']
        ]
    ],
    'about' => [
        'title' => 'About Section',
        'folder' => 'about/',
        'images' => [
            'about-pic' => ['file' => 'about-pic.jpg', 'title' => 'About Picture'],
            'list-1' => ['file' => 'list-1.png', 'title' => 'List Icon 1'],
            'list-2' => ['file' => 'list-2.png', 'title' => 'List Icon 2'],
            'list-3' => ['file' => 'list-3.png', 'title' => 'List Icon 3'],
            'list-4' => ['file' => 'list-4.png', 'title' => 'List Icon 4']
        ]
    ],
    'gallery' => [
        'title' => 'Main Gallery',
        'folder' => 'gallery/',
        'images' => []
    ],
    'portfolio' => [
        'title' => 'Portfolio',
        'folder' => 'portfolio/',
        'images' => [
            'baby' => ['file' => 'baby.jpg', 'title' => 'Baby Photography'],
            'wedding' => ['file' => 'wedding.jpg', 'title' => 'Wedding Photography'],
            'wedd' => ['file' => 'wedd.jpg', 'title' => 'Wedding 2'],
            'travel' => ['file' => 'travel.jpg', 'title' => 'Travel Photography'],
            'bs' => ['file' => 'bs.jpg', 'title' => 'Business 1'],
            'bs1' => ['file' => 'bs1.jpg', 'title' => 'Business 2'],
            'bs-3' => ['file' => 'bs-3.jpg', 'title' => 'Business 3'],
            'bs4' => ['file' => 'bs4.jpg', 'title' => 'Business 4'],
            'bs5' => ['file' => 'bs5.jpg', 'title' => 'Business 5'],
            'p1' => ['file' => 'p1.jpg', 'title' => 'Portfolio 1'],
            'p2' => ['file' => 'p2.jpg', 'title' => 'Portfolio 2'],
            'p3' => ['file' => 'p3.jpg', 'title' => 'Portfolio 3'],
            'w3' => ['file' => 'w3.jpg', 'title' => 'Wedding 3'],
            'w4' => ['file' => 'w4.jpg', 'title' => 'Wedding 4'],
            'w6' => ['file' => 'w6.jpg', 'title' => 'Wedding 6'],
            'w7' => ['file' => 'w7.jpg', 'title' => 'Wedding 7']
        ]
    ],
    'services' => [
        'title' => 'Services',
        'folder' => 'services/',
        'images' => [
            'service-1' => ['file' => 'service-1.jpg', 'title' => 'Service 1'],
            'service-2' => ['file' => 'service-2.jpg', 'title' => 'Service 2'],
            'service-3' => ['file' => 'service-3.jpg', 'title' => 'Service 3']
        ]
    ],
    'team' => [
        'title' => 'Team Members',
        'folder' => 'team/',
        'images' => [
            'team-1' => ['file' => 'team-1.jpg', 'title' => 'Team Member 1'],
            'team-2' => ['file' => 'team-2.jpg', 'title' => 'Team Member 2'],
            'team-3' => ['file' => 'team-3.jpg', 'title' => 'Team Member 3'],
            'team-4' => ['file' => 'team-4.jpg', 'title' => 'Team Member 4']
        ]
    ],
    'testimonial' => [
        'title' => 'Testimonials',
        'folder' => 'testimonial/',
        'images' => [
            'ta-1' => ['file' => 'ta-1.jpg', 'title' => 'Testimonial 1'],
            'ta-2' => ['file' => 'ta-2.jpg', 'title' => 'Testimonial 2'],
            'ta-3' => ['file' => 'ta-3.jpg', 'title' => 'Testimonial 3'],
            'ta-4' => ['file' => 'ta-4.jpg', 'title' => 'Testimonial 4'],
            'quote' => ['file' => 'quote.png', 'title' => 'Quote Icon']
        ]
    ],
    'blog' => [
        'title' => 'Blog Images',
        'folder' => 'blog/',
        'images' => [
            'blog-1' => ['file' => 'blog-1.jpg', 'title' => 'Blog Post 1'],
            'blog-2' => ['file' => 'blog-2.jpg', 'title' => 'Blog Post 2'],
            'blog-3' => ['file' => 'blog-3.jpg', 'title' => 'Blog Post 3'],
            'blog-4' => ['file' => 'blog-4.jpg', 'title' => 'Blog Post 4'],
            'blog-5' => ['file' => 'blog-5.jpg', 'title' => 'Blog Post 5'],
            'blog-6' => ['file' => 'blog-6.jpg', 'title' => 'Blog Post 6'],
            'fp-1' => ['file' => 'fp-1.jpg', 'title' => 'Featured Post 1'],
            'fp-2' => ['file' => 'fp-2.jpg', 'title' => 'Featured Post 2'],
            'fp-3' => ['file' => 'fp-3.jpg', 'title' => 'Featured Post 3'],
            'fp-4' => ['file' => 'fp-4.jpg', 'title' => 'Featured Post 4'],
            'fp-5' => ['file' => 'fp-5.jpg', 'title' => 'Featured Post 5'],
            'insta-1' => ['file' => 'insta-1.jpg', 'title' => 'Instagram Blog 1'],
            'insta-2' => ['file' => 'insta-2.jpg', 'title' => 'Instagram Blog 2'],
            'insta-3' => ['file' => 'insta-3.jpg', 'title' => 'Instagram Blog 3'],
            'insta-4' => ['file' => 'insta-4.jpg', 'title' => 'Instagram Blog 4']
        ]
    ],
    'blog_details' => [
        'title' => 'Blog Details',
        'folder' => 'blog/details/',
        'images' => [
            'bd-1' => ['file' => 'bd-1.jpg', 'title' => 'Blog Detail 1'],
            'bd-2' => ['file' => 'bd-2.jpg', 'title' => 'Blog Detail 2'],
            'bd-3' => ['file' => 'bd-3.jpg', 'title' => 'Blog Detail 3'],
            'blog-hero' => ['file' => 'blog-hero.jpg', 'title' => 'Blog Hero'],
            'next' => ['file' => 'next.jpg', 'title' => 'Next Post'],
            'post-author' => ['file' => 'post-author.jpg', 'title' => 'Post Author'],
            'prev' => ['file' => 'prev.jpg', 'title' => 'Previous Post'],
            'quote' => ['file' => 'quote.png', 'title' => 'Quote Icon']
        ]
    ],
    'blog_comments' => [
        'title' => 'Blog Comments',
        'folder' => 'blog/details/comment/',
        'images' => [
            'comment-1' => ['file' => 'comment-1.jpg', 'title' => 'Comment 1'],
            'comment-2' => ['file' => 'comment-2.jpg', 'title' => 'Comment 2'],
            'comment-3' => ['file' => 'comment-3.jpg', 'title' => 'Comment 3']
        ]
    ],
    'instagram' => [
        'title' => 'Instagram Feed',
        'folder' => 'instagram/',
        'images' => [
            'insta-1' => ['file' => 'insta-1.jpg', 'title' => 'Instagram 1'],
            'insta-2' => ['file' => 'insta-2.jpg', 'title' => 'Instagram 2'],
            'insta-3' => ['file' => 'insta-3.jpg', 'title' => 'Instagram 3']
        ]
    ],
    'categories' => [
        'title' => 'Categories',
        'folder' => 'categories/',
        'images' => [
            'baby' => ['file' => 'baby.jpg', 'title' => 'Baby Category'],
            'wedding' => ['file' => 'wedding.jpg', 'title' => 'Wedding Category'],
            'wedd' => ['file' => 'wedd.jpg', 'title' => 'Wedding Alt'],
            'travel' => ['file' => 'travel.jpg', 'title' => 'Travel Category'],
            'bs' => ['file' => 'bs.jpg', 'title' => 'Business Category'],
            'bs1' => ['file' => 'bs1.jpg', 'title' => 'Business Alt']
        ]
        ],
    'recent' => [
        'title' => 'Recent Photography',
        'folder' => 'recent-photography/',
        'images' => [
            'rp-1' => ['file' => 'rp-1.jpg', 'title' => 'Recent Photo 1'],
            'rp-2' => ['file' => 'rp-2.jpg', 'title' => 'Recent Photo 2'],
            'rp-3' => ['file' => 'rp-3.jpg', 'title' => 'Recent Photo 3'],
            'rp-4' => ['file' => 'rp-4.jpg', 'title' => 'Recent Photo 4']
        ]
    ],
    'boomika' => [
        'title' => 'Boomika Collection',
        'folder' => 'boomika/',
        'images' => [
            'img1' => ['file' => '1.jpg', 'title' => 'Boomika Image 1'],
            'img2' => ['file' => '2.jpg', 'title' => 'Boomika Image 2'],
            'img3' => ['file' => '3.jpg', 'title' => 'Boomika Image 3'],
            'img4' => ['file' => '4.jpg', 'title' => 'Boomika Image 4'],
            'img5' => ['file' => '5.jpg', 'title' => 'Boomika Image 5'],
            'img6' => ['file' => '6.jpg', 'title' => 'Boomika Image 6'],
            'img7' => ['file' => '7.jpg', 'title' => 'Boomika Image 7'],
            'img8' => ['file' => '8.jpg', 'title' => 'Boomika Image 8'],
            'ad' => ['file' => 'AD.jpg', 'title' => 'Advertisement'],
            'art' => ['file' => 'art.jpg', 'title' => 'Art'],
            'b1' => ['file' => 'b1.jpg', 'title' => 'B1 Image'],
            'b2' => ['file' => 'b2.jpg', 'title' => 'B2 Image'],
            'bg' => ['file' => 'bg.jpg', 'title' => 'Background'],
            'brand' => ['file' => 'brand.jpg', 'title' => 'Brand'],
            'chart' => ['file' => 'chart.JPG', 'title' => 'Chart'],
            'e' => ['file' => 'e.jpg', 'title' => 'E Image'],
            'edit' => ['file' => 'edit.jpg', 'title' => 'Edit'],
            'entrence' => ['file' => 'entrence.jpg', 'title' => 'Entrance'],
            'int' => ['file' => 'int.jpg', 'title' => 'Int'],
            'interior' => ['file' => 'interior.jpg', 'title' => 'Interior'],
            'jai' => ['file' => 'jai.jpeg', 'title' => 'Jai'],
            'lap' => ['file' => 'lap.png', 'title' => 'Laptop'],
            'logo-3' => ['file' => 'Logo-3.ico', 'title' => 'Logo 3'],
            'logo' => ['file' => 'logo.png', 'title' => 'Logo'],
            'm1' => ['file' => 'm1.jpg', 'title' => 'M1'],
            'm2' => ['file' => 'm2.jpg', 'title' => 'M2'],
            'm3' => ['file' => 'm3.jpg', 'title' => 'M3'],
            'mlogo-1' => ['file' => 'MLogo-1.png', 'title' => 'M Logo 1'],
            'moi1' => ['file' => 'moi1.JPG', 'title' => 'Moi 1'],
            'moi2' => ['file' => 'moi2.JPG', 'title' => 'Moi 2'],
            'moi3' => ['file' => 'moi3.JPG', 'title' => 'Moi 3'],
            'moi4' => ['file' => 'moi4.JPG', 'title' => 'Moi 4'],
            'moi5' => ['file' => 'moi5.png', 'title' => 'Moi 5'],
            'pdf' => ['file' => 'pdf.JPG', 'title' => 'PDF'],
            's1' => ['file' => 'S1.jpg', 'title' => 'S1'],
            's2' => ['file' => 'S2.jpg', 'title' => 'S2'],
            's3' => ['file' => 'S3.jpg', 'title' => 'S3'],
            's4' => ['file' => 'S4.jpg', 'title' => 'S4'],
            's5' => ['file' => 'S5.jpg', 'title' => 'S5'],
            's6' => ['file' => 'S6.jpg', 'title' => 'S6'],
            's7' => ['file' => 'S7.jpg', 'title' => 'S7'],
            'v' => ['file' => 'v.jpg', 'title' => 'V Image']
        ]
    ],
    'general' => [
        'title' => 'General Images',
        'folder' => '',
        'images' => [
            'logo' => ['file' => 'logo.png', 'title' => 'Main Logo'],
            'f-logo' => ['file' => 'f-logo.png', 'title' => 'Footer Logo'],
            'company_logo' => ['file' => 'company_logo.png', 'title' => 'Company Logo'],
            'cta-bg' => ['file' => 'cta-bg.jpg', 'title' => 'CTA Background'],
            'baby' => ['file' => 'baby.jpg', 'title' => 'Baby Photo'],
            'cam' => ['file' => 'cam.gif', 'title' => 'Camera Animation'],
            'admin' => ['file' => 'admin.png', 'title' => 'Admin Icon']
        ]
    ],
    'videos' => [
        'title' => 'Video Files',
        'folder' => 'boomika/',
        'images' => [
            'ps-video' => ['file' => 'PS.mp4', 'title' => 'PS Video']
        ]
    ]
];

// Auto-populate gallery images (1-17)
for ($i = 1; $i <= 17; $i++) {
    $image_categories['gallery']['images']["gallery-$i"] = [
        'file' => "gallery-$i.jpg",
        'title' => "Gallery Image $i"
    ];
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

// Handle login
if (isset($_POST['password'])) {
    if ($_POST['password'] === $password) {
        $_SESSION['logged_in'] = true;
    } else {
        $error = 'Invalid password';
    }
}

// Handle image upload
$message = '';
$message_type = '';

if (isset($_POST['upload']) && isset($_SESSION['logged_in'])) {
    $category = $_POST['category'];
    $image_key = $_POST['image_key'];
    
    if (isset($image_categories[$category]) && isset($_FILES['image'])) {
        $cat_config = $image_categories[$category];
        $image_info = $cat_config['images'][$image_key];
        $file = $_FILES['image'];
        
        // Validate file
        if ($file['error'] === UPLOAD_ERR_OK) {
            $allowed_types = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp', 'image/gif', 'video/mp4'];
            $max_size = 20 * 1024 * 1024; // 20MB
            
            // Check file type
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime_type = finfo_file($finfo, $file['tmp_name']);
            finfo_close($finfo);
            
            if ($file['size'] > $max_size) {
                $message = 'File size exceeds 20MB limit';
                $message_type = 'error';
            }
            elseif (!in_array($mime_type, $allowed_types)) {
                $message = 'Invalid file type. Allowed: JPG, PNG, WebP, GIF, MP4';
                $message_type = 'error';
            }
            else {
                // Build target path
                $target_dir = $img_dir . $cat_config['folder'];
                
                // Create directory if it doesn't exist
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                
                $target_path = $target_dir . $image_info['file'];
                
                // Move uploaded file
                if (move_uploaded_file($file['tmp_name'], $target_path)) {
                    $message = 'File uploaded successfully!';
                    $message_type = 'success';
                    clearstatcache();
                } else {
                    $message = 'Failed to upload file. Check permissions.';
                    $message_type = 'error';
                }
            }
        } else {
            $message = 'Upload error occurred';
            $message_type = 'error';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Studio Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f5f5f7;
            padding: 20px;
            color: #1d1d1f;
        }
        
        .container {
            max-width: 1600px;
            margin: 0 auto;
            background-color: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.06);
        }
        
        h1 {
            color: #1d1d1f;
            margin-bottom: 40px;
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        
        .login-form {
            max-width: 420px;
            margin: 80px auto;
            padding: 40px;
            background-color: #fbfbfd;
            border-radius: 16px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.04);
        }
        
        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #1d1d1f;
            font-size: 1.8rem;
            font-weight: 600;
        }
        
        .login-form input {
            width: 100%;
            padding: 14px 16px;
            margin-bottom: 16px;
            border: 1px solid #d2d2d7;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.2s;
        }
        
        .login-form input:focus {
            outline: none;
            border-color: #0071e3;
            box-shadow: 0 0 0 3px rgba(0,113,227,0.1);
        }
        
        .login-form button {
            width: 100%;
            padding: 14px;
            background-color: #0071e3;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.2s;
        }
        
        .login-form button:hover {
            background-color: #0077ed;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0,113,227,0.3);
        }
        
        .tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 40px;
            border-bottom: 1px solid #e5e5e7;
            flex-wrap: wrap;
            padding-bottom: 0;
        }
        
        .tab {
            padding: 12px 20px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            color: #86868b;
            transition: all 0.2s;
            border-bottom: 2px solid transparent;
            margin-bottom: -1px;
            white-space: nowrap;
        }
        
        .tab.active {
            color: #1d1d1f;
            border-bottom-color: #0071e3;
        }
        
        .tab:hover {
            color: #1d1d1f;
        }
        
        .tab-content {
            display: none;
            animation: fadeIn 0.3s ease-in-out;
        }
        
        .tab-content.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .category {
            margin-bottom: 50px;
        }
        
        .category h2 {
            color: #1d1d1f;
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: 600;
        }
        
        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
        }
        
        .image-section {
            padding: 24px;
            background-color: #fbfbfd;
            border-radius: 12px;
            border: 1px solid #e5e5e7;
            transition: all 0.2s;
        }
        
        .image-section:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            border-color: #d2d2d7;
        }
        
        .image-section h3 {
            color: #1d1d1f;
            margin-bottom: 16px;
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        .current-image {
            margin-bottom: 16px;
            background-color: white;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #e5e5e7;
        }
        
        .current-image img {
            max-width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 6px;
        }
        
        .current-image video {
            max-width: 100%;
            height: 180px;
            border-radius: 6px;
        }
        
        .no-image {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f7;
            color: #86868b;
            border-radius: 6px;
            font-size: 14px;
            flex-direction: column;
            gap: 8px;
        }
        
        .upload-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .upload-form input[type="file"] {
            padding: 10px;
            border: 2px dashed #d2d2d7;
            border-radius: 8px;
            background-color: #fbfbfd;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.2s;
        }
        
        .upload-form input[type="file"]:hover {
            border-color: #0071e3;
            background-color: #f5f5f7;
        }
        
        .upload-form button {
            padding: 12px 24px;
            background-color: #34c759;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.2s;
            font-size: 15px;
        }
        
        .upload-form button:hover {
            background-color: #30b854;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(52,199,89,0.3);
        }
        
        .message {
            padding: 16px 24px;
            margin: 24px 0;
            border-radius: 8px;
            text-align: center;
            font-weight: 500;
            font-size: 15px;
        }
        
        .success {
            background-color: #d1f4d5;
            color: #00692b;
            border: 1px solid #b4e6ba;
        }
        
        .error {
            background-color: #ffd5d5;
            color: #c60000;
            border: 1px solid #ffb3b3;
        }
        
        .logout {
            text-align: right;
            margin-bottom: 40px;
        }
        
        .logout button {
            padding: 12px 28px;
            background-color: #ff3b30;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.2s;
            font-size: 15px;
        }
        
        .logout button:hover {
            background-color: #ff453a;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(255,59,48,0.3);
        }
        
        .file-info {
            margin-top: 8px;
            color: #86868b;
            font-size: 13px;
            line-height: 1.4;
        }
        
        .path-info {
            font-family: 'SF Mono', Monaco, monospace;
            font-size: 11px;
            color: #86868b;
            margin-top: 4px;
            word-break: break-all;
        }
        
        .search-box {
            margin-bottom: 30px;
            position: relative;
        }
        
        .search-box input {
            width: 100%;
            padding: 14px 48px 14px 16px;
            border: 1px solid #d2d2d7;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.2s;
        }
        
        .search-box input:focus {
            outline: none;
            border-color: #0071e3;
            box-shadow: 0 0 0 3px rgba(0,113,227,0.1);
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .stat-card {
            background: #fbfbfd;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
            border: 1px solid #e5e5e7;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #0071e3;
            margin-bottom: 8px;
        }
        
        .stat-label {
            color: #86868b;
            font-size: 14px;
            font-weight: 500;
        }
        
        /* Added styles for video display */
        .video-container {
            max-width: 100%;
            position: relative;
        }
        
        .video-container video {
            width: 100%;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if (!isset($_SESSION['logged_in'])): ?>
            <!-- Login Form -->
            <h1>Photo Studio Admin</h1>
            <form class="login-form" method="POST">
                <h2>Admin Login</h2>
                <?php if (isset($error)): ?>
                    <div class="message error"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>
                <input type="password" name="password" placeholder="Enter password" required autofocus>
                <button type="submit">Sign In</button>
                <p style="margin-top: 20px; color: #86868b; text-align: center; font-size: 14px;">
                    Test Password: test123
                </p>
            </form>
        <?php else: ?>
            <!-- Dashboard -->
            <div class="logout">
                <button onclick="window.location.href='?logout=1'">Logout</button>
            </div>
            
            <h1>Image Management System</h1>
            
            <?php if (!empty($message)): ?>
                <div class="message <?php echo htmlspecialchars($message_type); ?>">
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>
            
            <!-- Statistics -->
            <?php
            $total_images = 0;
            $uploaded_images = 0;
            foreach ($image_categories as $category) {
                $total_images += count($category['images']);
                foreach ($category['images'] as $img) {
                    $path = $img_dir . $category['folder'] . $img['file'];
                    if (file_exists($path)) {
                        $uploaded_images++;
                    }
                }
            }
            ?>
            
            <div class="stats">
                <div class="stat-card">
                    <div class="stat-number"><?php echo $total_images; ?></div>
                    <div class="stat-label">Total Files</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo $uploaded_images; ?></div>
                    <div class="stat-label">Uploaded</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo $total_images - $uploaded_images; ?></div>
                    <div class="stat-label">Missing</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo count($image_categories); ?></div>
                    <div class="stat-label">Categories</div>
                </div>
            </div>
            
            <!-- Search Box -->
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Search images by name..." onkeyup="searchImages()">
            </div>
            
            <!-- Tabs -->
            <div class="tabs">
                <?php 
                $first = true;
                foreach ($image_categories as $cat_key => $category): 
                ?>
                    <button class="tab <?php echo $first ? 'active' : ''; ?>" 
                            onclick="showTab('<?php echo $cat_key; ?>', this)">
                        <?php echo htmlspecialchars($category['title']); ?>
                        <span style="color: #86868b; font-size: 13px;">(<?php echo count($category['images']); ?>)</span>
                    </button>
                <?php 
                    $first = false;
                endforeach; 
                ?>
            </div>
            
            <!-- Tab Contents -->
            <?php 
            $first = true;
            foreach ($image_categories as $cat_key => $category): 
            ?>
                <div id="tab-<?php echo $cat_key; ?>" class="tab-content <?php echo $first ? 'active' : ''; ?>">
                    <div class="category">
                        <h2><?php echo htmlspecialchars($category['title']); ?></h2>
                        <div class="image-grid">
                            <?php foreach ($category['images'] as $img_key => $image): ?>
                                <div class="image-section" data-search="<?php echo strtolower($image['title'] . ' ' . $image['file']); ?>">
                                    <h3><?php echo htmlspecialchars($image['title']); ?></h3>
                                    
                                    <div class="current-image">
                                        <?php 
                                        $image_path = $img_dir . $category['folder'] . $image['file'];
                                        $exists = file_exists($image_path);
                                        $is_video = pathinfo($image['file'], PATHINFO_EXTENSION) === 'mp4';
                                        
                                        if ($exists): 
                                            if ($is_video):
                                        ?>
                                            <video controls>
                                                <source src="<?php echo htmlspecialchars($image_path); ?>?t=<?php echo time(); ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="file-info">
                                                <?php echo htmlspecialchars($image['file']); ?> • 
                                                <?php echo round(filesize($image_path) / 1024); ?> KB
                                            </div>
                                        <?php else: ?>
                                            <img src="<?php echo htmlspecialchars($image_path); ?>?t=<?php echo time(); ?>" 
                                                 alt="<?php echo htmlspecialchars($image['title']); ?>">
                                            <div class="file-info">
                                                <?php echo htmlspecialchars($image['file']); ?> • 
                                                <?php echo round(filesize($image_path) / 1024); ?> KB
                                            </div>
                                        <?php endif; ?>
                                        <?php else: ?>
                                            <div class="no-image">
                                                <svg width="48" height="48" fill="none" stroke="#86868b" stroke-width="2">
                                                    <rect x="8" y="12" width="32" height="28" rx="2"/>
                                                    <circle cx="18" cy="22" r="3"/>
                                                    <path d="M8 32l10-10 6 6 8-8 8 8"/>
                                                </svg>
                                                <span>No file uploaded</span>
                                            </div>
                                        <?php endif; ?>
                                        <div class="path-info">
                                            Path: <?php echo htmlspecialchars($image_path); ?>
                                        </div>
                                    </div>
                                    
                                    <form class="upload-form" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="category" value="<?php echo htmlspecialchars($cat_key); ?>">
                                        <input type="hidden" name="image_key" value="<?php echo htmlspecialchars($img_key); ?>">
                                        <input type="file" name="image" accept="<?php echo $is_video ? 'video/*' : 'image/*'; ?>" required>
                                        <button type="submit" name="upload" value="1">Upload File</button>
                                    </form>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php 
                $first = false;
            endforeach; 
            ?>
        <?php endif; ?>
    </div>
    
    <script>
        function showTab(tabName, button) {
            // Hide all tab contents
            const contents = document.querySelectorAll('.tab-content');
            contents.forEach(content => content.classList.remove('active'));
            
            // Remove active class from all tabs
            const tabs = document.querySelectorAll('.tab');
            tabs.forEach(tab => tab.classList.remove('active'));
            
            // Show selected tab content
            document.getElementById('tab-' + tabName).classList.add('active');
            
            // Add active class to clicked tab
            button.classList.add('active');
            
            // Clear search when switching tabs
            document.getElementById('searchInput').value = '';
            searchImages();
        }
        
        function searchImages() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const allSections = document.querySelectorAll('.image-section');
            
            allSections.forEach(section => {
                const searchData = section.getAttribute('data-search');
                if (searchData.includes(searchTerm)) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        }
        
        // Auto-hide message after 5 seconds
        const message = document.querySelector('.message');
        if (message) {
            setTimeout(() => {
                message.style.opacity = '0';
                message.style.transition = 'opacity 0.3s';
                setTimeout(() => message.remove(), 300);
            }, 5000);
        }
        
        // File input preview
        document.addEventListener('change', function(e) {
            if (e.target.type === 'file') {
                const fileName = e.target.files[0]?.name || 'No file selected';
                console.log('Selected file:', fileName);
            }
        });
    </script>
</body>
</html>