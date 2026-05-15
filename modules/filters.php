<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAVIO - Sistema de Aprendizaje Virtual Interactivo</title>
  <link rel="stylesheet" href="../css/filters.css">
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="header-left">
      <button class="menu-toggle" id="menuToggle" aria-label="Abrir menú">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </button>
      <div class="logo">
        <div class="logo-utb">
          <img src="../img/logoutb.png" alt="" width="200" height="100">
        </div>
        <div class="logo-divider"></div>
        <div class="logo-savio">
          <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 6v6l4 2"></path>
          </svg> -->
          <img src="../img/logo-savio-azul.png" alt=""  width="350" height="100">
        </div>
      </div>
    </div>
    
    <div class="header-center">
      <div class="search-box" id="searchBox">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <input type="text" placeholder="Buscar en el curso..." id="searchInput">
        <kbd>Ctrl+K</kbd>
      </div>
    </div>
    
    <div class="header-right">
      <button class="icon-btn" id="themeToggle" aria-label="Cambiar tema">
        <svg class="sun-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="5"></circle>
          <line x1="12" y1="1" x2="12" y2="3"></line>
          <line x1="12" y1="21" x2="12" y2="23"></line>
          <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
          <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
          <line x1="1" y1="12" x2="3" y2="12"></line>
          <line x1="21" y1="12" x2="23" y2="12"></line>
          <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
          <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
        </svg>
        <svg class="moon-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
      </button>
      <button class="icon-btn notification-btn" aria-label="Notificaciones">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
          <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
        </svg>
        <span class="notification-badge">3</span>
      </button>
      <div class="user-menu" id="userMenu">
        <div class="avatar">SK</div>
        <span class="user-name">SUBIROZK</span>
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
      </div>
    </div>
  </header>

  <!-- Course Banner -->
  <div class="course-banner">
    <div class="banner-content">
      <nav class="breadcrumb">
        <a href="#">Área personal</a>
        <span>/</span>
        <a href="#">Cursos</a>
        <span>/</span>
        <a href="#">PREGRADO</a>
        <span>/</span>
        <a href="#">Facultad de Ciencias Básicas</a>
        <span>/</span>
        <span class="current">202610</span>
      </nav>
      <div class="banner-info">
        <div class="course-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
          </svg>
        </div>
        <div class="course-details">
          <h1>Física Electricidad y Magnetismo</h1>
          <p class="course-code">CBAS-F02A-L2-2579-202610</p>
        </div>
      </div>
      <div class="banner-tags">
        <span class="tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
          Dr. Carlos Mendoza
        </span>
        <span class="tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <polyline points="12 6 12 12 16 14"></polyline>
          </svg>
          Lun y Mié 8:00 - 10:00
        </span>
        <span class="tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
          Semestre 2026-10
        </span>
      </div>
    </div>
  </div>

  <!-- Main Layout -->
  <div class="main-layout">
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
      <div class="sidebar-section">
        <h3>Progreso del Curso</h3>
        <div class="progress-container">
          <div class="progress-bar">
            <div class="progress-fill" style="width: 65%"></div>
          </div>
          <span class="progress-text">65% completado</span>
        </div>
      </div>

      <div class="sidebar-section">
        <h3>Accesos Rápidos</h3>
        <nav class="quick-links">
          <a href="#" class="quick-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
              <polyline points="14 2 14 8 20 8"></polyline>
              <line x1="16" y1="13" x2="8" y2="13"></line>
              <line x1="16" y1="17" x2="8" y2="17"></line>
              <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            Documentos
          </a>
          <a href="#" class="quick-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
              <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            Tareas
            <span class="badge">3</span>
          </a>
          <a href="#" class="quick-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            Calendario
          </a>
          <a href="#" class="quick-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg>
            Calificaciones
          </a>
        </nav>
      </div>

      <div class="sidebar-section">
        <h3>Semanas</h3>
        <nav class="week-nav">
          <a href="#" class="week-link" data-week="1">Semana 1</a>
          <a href="#" class="week-link" data-week="2">Semana 2</a>
          <a href="#" class="week-link" data-week="3">Semana 3</a>
          <a href="#" class="week-link" data-week="4">Semana 4</a>
          <a href="#" class="week-link active" data-week="5">
            Semana 5
            <span class="current-badge">Actual</span>
          </a>
          <a href="#" class="week-link" data-week="6">Semana 6</a>
          <a href="#" class="week-link" data-week="7">Semana 7</a>
          <a href="#" class="week-link" data-week="8">Semana 8</a>
        </nav>
      </div>

      <div class="sidebar-section">
        <h3>Actividad Reciente</h3>
        <div class="activity-list">
          <div class="activity-item">
            <div class="activity-dot"></div>
            <div class="activity-content">
              <p>Pre informe subido</p>
              <span>Hace 2 horas</span>
            </div>
          </div>
          <div class="activity-item">
            <div class="activity-dot"></div>
            <div class="activity-content">
              <p>Calificación recibida</p>
              <span>Ayer</span>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <!-- Overlay for mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Dashboard Cards -->
      <div class="dashboard-cards">
        <div class="card stat-card">
          <div class="card-icon pending">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"></circle>
              <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
          </div>
          <div class="card-info">
            <span class="card-label">Tareas Pendientes</span>
            <span class="card-value">3</span>
          </div>
        </div>
        <div class="card stat-card">
          <div class="card-icon completed">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
              <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
          </div>
          <div class="card-info">
            <span class="card-label">Completadas</span>
            <span class="card-value">12</span>
          </div>
        </div>
        <div class="card stat-card">
          <div class="card-icon progress">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="18" y1="20" x2="18" y2="10"></line>
              <line x1="12" y1="20" x2="12" y2="4"></line>
              <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
          </div>
          <div class="card-info">
            <span class="card-label">Progreso</span>
            <span class="card-value">65%</span>
          </div>
        </div>
        <div class="card stat-card urgent">
          <div class="card-icon urgent">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="12" y1="8" x2="12" y2="12"></line>
              <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
          </div>
          <div class="card-info">
            <span class="card-label">Próxima Entrega</span>
            <span class="card-value">2 días</span>
          </div>
        </div>
      </div>

      <!-- Week Filter -->
      <div class="week-filter">
        <button class="filter-btn" data-filter="all">Todas</button>
        <button class="filter-btn" data-filter="1">Semana 1</button>
        <button class="filter-btn" data-filter="2">Semana 2</button>
        <button class="filter-btn" data-filter="3">Semana 3</button>
        <button class="filter-btn" data-filter="4">Semana 4</button>
        <button class="filter-btn active" data-filter="5">Semana 5</button>
        <button class="filter-btn" data-filter="6">Semana 6</button>
        <button class="filter-btn" data-filter="7">Semana 7</button>
        <button class="filter-btn" data-filter="8">Semana 8</button>
      </div>

      <!-- Content Header -->
      <div class="content-header">
        <h2>Contenido del Curso</h2>
        <div class="content-actions">
          <button class="btn-secondary" id="expandAll">Expandir todo</button>
          <button class="btn-secondary" id="collapseAll">Colapsar todo</button>
        </div>
      </div>

      <!-- Week Sections -->
      <div class="weeks-container" id="weeksContainer">
        <!-- General Section -->
        <section class="week-section" data-week="general">
          <button class="week-header" aria-expanded="false">
            <div class="week-title">
              <svg class="chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>General</span>
            </div>
            <span class="week-badge">4 recursos</span>
          </button>
          <div class="week-content">
            <div class="activity-item-content">
              <div class="activity-icon document">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Avisos</h4>
                <p>Foro de avisos del curso</p>
              </div>
            </div>
            <div class="activity-item-content">
              <div class="activity-icon document">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Lineamientos pre informe e informe de laboratorio</h4>
                <p>Documento PDF</p>
              </div>
            </div>
            <div class="activity-item-content">
              <div class="activity-icon task">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                  <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Experiencia 1</h4>
                <p>Actividad de laboratorio</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Week 1 -->
        <section class="week-section" data-week="1">
          <button class="week-header" aria-expanded="false">
            <div class="week-title">
              <svg class="chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Semana 1: 4 de febrero - 10 de febrero</span>
            </div>
            <span class="week-badge">2 actividades</span>
          </button>
          <div class="week-content">
            <div class="activity-item-content">
              <div class="activity-icon task pending">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Pre informe experiencia 1</h4>
                <p>Fenómenos electrostáticos</p>
                <div class="activity-meta">
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Apertura: 4 feb 2026, 00:00
                  </span>
                  <span class="meta-item deadline">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Cierre: 15 feb 2026, 17:00
                  </span>
                </div>
              </div>
              <span class="status-badge pending">Pendiente</span>
            </div>
            <div class="activity-item-content">
              <div class="activity-icon task">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                  <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Informe experiencia 1 - Fenómenos electrostáticos</h4>
                <p>Entrega del informe completo</p>
                <div class="activity-meta">
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Apertura: 14 feb 2026, 00:00
                  </span>
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Cierre: 18 feb 2026, 17:00
                  </span>
                </div>
              </div>
              <span class="status-badge completed">Entregado</span>
            </div>
          </div>
        </section>

        <!-- Week 2 -->
        <section class="week-section" data-week="2">
          <button class="week-header" aria-expanded="false">
            <div class="week-title">
              <svg class="chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Semana 2: 11 de febrero - 17 de febrero</span>
            </div>
            <span class="week-badge">1 actividad</span>
          </button>
          <div class="week-content">
            <div class="activity-item-content">
              <div class="activity-icon task">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                  <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Entrega laboratorio #2 - Medición de diferencia potencial</h4>
                <p>Corriente y resistencia</p>
                <div class="activity-meta">
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Apertura: 23 mar 2026, 00:00
                  </span>
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Cierre: 25 mar 2026, 13:00
                  </span>
                </div>
              </div>
              <span class="status-badge completed">Entregado</span>
            </div>
          </div>
        </section>

        <!-- Week 3 -->
        <section class="week-section" data-week="3">
          <button class="week-header" aria-expanded="false">
            <div class="week-title">
              <svg class="chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Semana 3: 18 de febrero - 24 de febrero</span>
            </div>
            <span class="week-badge">1 actividad</span>
          </button>
          <div class="week-content">
            <div class="activity-item-content">
              <div class="activity-icon task">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                  <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Entrega Informe Experiencia #4 - Resistencia y Resistividad</h4>
                <p>Análisis de circuitos resistivos</p>
                <div class="activity-meta">
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Apertura: 6 abr 2026, 00:00
                  </span>
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Cierre: 10 abr 2026, 17:00
                  </span>
                </div>
              </div>
              <span class="status-badge completed">Entregado</span>
            </div>
          </div>
        </section>

        <!-- Week 4 -->
        <section class="week-section" data-week="4">
          <button class="week-header" aria-expanded="false">
            <div class="week-title">
              <svg class="chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Semana 4: 25 de febrero - 3 de marzo</span>
            </div>
            <span class="week-badge">1 actividad</span>
          </button>
          <div class="week-content">
            <div class="activity-item-content">
              <div class="activity-icon task pending">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Entre Pre informe Leyes de Kirchooff</h4>
                <p>Análisis de circuitos con leyes de Kirchhoff</p>
                <div class="activity-meta">
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Apertura: 15 abr 2026, 00:00
                  </span>
                  <span class="meta-item deadline">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Cierre: 17 abr 2026, 17:00
                  </span>
                </div>
              </div>
              <span class="status-badge pending">Pendiente</span>
            </div>
          </div>
        </section>

        <!-- Week 5 - Current -->
        <section class="week-section current" data-week="5">
          <button class="week-header expanded" aria-expanded="true">
            <div class="week-title">
              <svg class="chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Semana 5: 4 de marzo - 10 de marzo</span>
              <span class="current-week-badge">Semana Actual</span>
            </div>
            <span class="week-badge pending">1 pendiente</span>
          </button>
          <div class="week-content expanded">
            <div class="activity-item-content">
              <div class="activity-icon task pending">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                  <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Entrega Informe Experiencia #5 - Leyes de Kirchooff</h4>
                <p>Análisis completo de circuitos</p>
                <div class="activity-meta">
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Apertura: 18 abr 2026, 00:00
                  </span>
                  <span class="meta-item deadline">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Cierre: 24 abr 2026, 17:00
                  </span>
                </div>
              </div>
              <span class="status-badge urgent">Urgente - 2 días</span>
            </div>
          </div>
        </section>

        <!-- Week 6 -->
        <section class="week-section" data-week="6">
          <button class="week-header" aria-expanded="false">
            <div class="week-title">
              <svg class="chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Semana 6: 11 de marzo - 17 de marzo</span>
            </div>
            <span class="week-badge">1 actividad</span>
          </button>
          <div class="week-content">
            <div class="activity-item-content">
              <div class="activity-icon task">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                </svg>
              </div>
              <div class="activity-details">
                <h4>Entrega Pre Informe Experiencia 6 - Carga de un condensador</h4>
                <p>Estudio de condensadores y circuitos RC</p>
                <div class="activity-meta">
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Apertura: 28 abr 2026, 00:00
                  </span>
                  <span class="meta-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Cierre: 28 may 2026, 17:00
                  </span>
                </div>
              </div>
              <span class="status-badge upcoming">Próximamente</span>
            </div>
          </div>
        </section>

        <!-- Week 7 -->
        <section class="week-section" data-week="7">
          <button class="week-header" aria-expanded="false">
            <div class="week-title">
              <svg class="chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Semana 7: 18 de marzo - 24 de marzo</span>
            </div>
            <span class="week-badge">Próximamente</span>
          </button>
          <div class="week-content">
            <p class="empty-message">No hay actividades programadas aún.</p>
          </div>
        </section>

        <!-- Week 8 -->
        <section class="week-section" data-week="8">
          <button class="week-header" aria-expanded="false">
            <div class="week-title">
              <svg class="chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Semana 8: 25 de marzo - 31 de marzo</span>
            </div>
            <span class="week-badge">Próximamente</span>
          </button>
          <div class="week-content">
            <p class="empty-message">No hay actividades programadas aún.</p>
          </div>
        </section>
      </div>
    </main>
  </div>

  <!-- Search Modal -->
  <div class="modal-overlay" id="searchModal">
    <div class="modal">
      <div class="modal-header">
        <div class="modal-search">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <input type="text" placeholder="Buscar actividades, documentos, tareas..." id="modalSearchInput" autofocus>
          <button class="close-modal" id="closeModal">
            <kbd>Esc</kbd>
          </button>
        </div>
      </div>
      <div class="modal-filters">
        <button class="modal-filter active">Todos</button>
        <button class="modal-filter">Tareas</button>
        <button class="modal-filter">Documentos</button>
        <button class="modal-filter">Laboratorios</button>
      </div>
      <div class="modal-content">
        <div class="search-section">
          <h4>Búsquedas recientes</h4>
          <div class="search-results">
            <a href="#" class="search-result">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
              <span>Pre informe Kirchhoff</span>
            </a>
            <a href="#" class="search-result">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
              </svg>
              <span>Lineamientos laboratorio</span>
            </a>
          </div>
        </div>
        <div class="search-section">
          <h4>Tareas pendientes</h4>
          <div class="search-results">
            <a href="#" class="search-result">
              <span class="result-badge pending">Pendiente</span>
              <span>Pre informe experiencia 1</span>
              <span class="result-date">Cierre: 15 feb</span>
            </a>
            <a href="#" class="search-result">
              <span class="result-badge urgent">Urgente</span>
              <span>Informe Experiencia #5</span>
              <span class="result-date">Cierre: 24 abr</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/filters.js"></script>
</body>
</html>
