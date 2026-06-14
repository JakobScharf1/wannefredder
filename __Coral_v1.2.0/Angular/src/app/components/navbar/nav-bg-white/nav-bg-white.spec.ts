import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NavBgWhite } from './nav-bg-white';

describe('NavBgWhite', () => {
  let component: NavBgWhite;
  let fixture: ComponentFixture<NavBgWhite>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NavBgWhite]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NavBgWhite);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
