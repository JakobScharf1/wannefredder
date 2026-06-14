import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NavTagline } from './nav-tagline';

describe('NavTagline', () => {
  let component: NavTagline;
  let fixture: ComponentFixture<NavTagline>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NavTagline]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NavTagline);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
