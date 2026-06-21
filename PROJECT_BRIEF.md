# Project Brief: E-Report (Sistem Pelaporan Pengaduan Layanan Masyarakat)

## Overview
A web-based community service complaint reporting system built with a decoupled architecture. Citizens can report infrastructure or security issues, and administrators can manage and respond to these reports.

## Technology Stack
- **Backend**: CodeIgniter 4 (PHP) - RESTful API Server.
- **Frontend**: VueJS 3 (CDN) - Single Page Application (SPA).
- **Styling**: TailwindCSS (CDN).
- **Database**: MySQL/MariaDB.
- **Communication**: Axios (HTTP Client).

## Database Schema (Minimal 3 Tables)
1. **users**: Admin account information (id, username, password, token).
2. **categories**: Complaint categories (id, name, description).
3. **reports**: Complaint data (id, reporter_name, category_id, content, evidence_image, status, created_at).

## Project Phases

### Phase 1: Foundation & Setup (Completed)
- [x] Initialize project directory structure (`backend-api/` and `frontend-spa/`).
- [x] Database design and migration/SQL script.
- [x] CodeIgniter 4 installation and basic configuration (Environment, Database, CORS).

### Phase 2: Backend API Development (Completed)
- [x] Create Resource Controllers for CRUD operations.
- [x] Implement Token-based authentication using CI4 Filters.
- [x] Configure JWT or Bearer Token mechanism.
- [x] Image upload handling for report evidence.

### Phase 3: Frontend Foundation & Auth (Completed)
- [x] Setup VueJS 3 SPA with Vue Router and TailwindCSS.
- [x] Create Login page and Authentication logic (Axios + localStorage).
- [x] Implement Navigation Guards (Session protection).
- [x] Implement Axios Interceptors (Token injection & 401 handling).

### Phase 4: Admin Dashboard & Public Page (Completed)
- [x] Build Public Landing Page (Report statistics overview).
- [x] Build Admin Dashboard (Category management, Report list).
- [x] Implement Report Status management (Pending, Processed, Completed).
- [x] Responsive UI design with TailwindCSS.

### Phase 5: Testing, Polish & Documentation (Completed)
- [x] End-to-end testing of features.
- [x] UI/UX refinements (Animations, Transitions).
- [x] Prepare README.md and final submission requirements.

---
**Status**: Proyek Selesai & Siap Dikumpulkan
