-- Database creation script for E-Report
CREATE DATABASE IF NOT EXISTS uasweb2_ereport;
USE uasweb2_ereport;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    token TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Categories table
CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT NULL
);

-- Reports table
CREATE TABLE IF NOT EXISTS reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    reporter_name VARCHAR(100) NOT NULL,
    category_id INT,
    content TEXT NOT NULL,
    evidence_image VARCHAR(255) NULL,
    status ENUM('pending', 'proses', 'selesai') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

-- Initial Data
INSERT INTO users (name, username, password) VALUES 
('Admin System', 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'); -- password: password

INSERT INTO categories (name, description) VALUES 
('Infrastruktur', 'Layanan terkait jalan, jembatan, dan bangunan publik.'),
('Keamanan', 'Layanan terkait ketertiban dan keamanan lingkungan.'),
('Kesehatan', 'Layanan terkait fasilitas kesehatan dan kebersihan.'),
('Lainnya', 'Kategori pengaduan lainnya.');
